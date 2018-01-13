<?php
/**
 * Created by PhpStorm.
 * User: gregory
 * Date: 12/21/17
 * Time: 12:28 AM
 */

?>
@section('cssincludes')
    <link rel="stylesheet" href="/css/admin/jobs.css">
@endsection
@extends('layouts/admin')
@section('content')


    <!-- Main content -->
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Jobs</li>
            <li class="breadcrumb-item active">{{isset($job) ? "Edit Job" : "Add Job"}}</li>
        </ol>

        <div class="container-fluid">

            <h1>{{isset($job) ? "Edit Job" : "Add Job"}}</h1>
            <form action="{{ isset($job) ? route('adminUpdateJob', $job->id) : route('adminCreateJob')}}" method="{{ isset($job) ? "PUT" : "POST"}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h3>Job Info</h3>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="title">Job Title</label>
                            <input type="text" name="title" placeholder="Job Title" class="form-control" {{isset($job) ? 'value='.$job->title : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="titledescription">Title Description</label>
                            <input type="text" name="titledescription" placeholder="Title Description" class="form-control" {{isset($job) ? 'value='.$job->titledescription : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="short">Short Job Description</label>
                            <input type="text" name="short" placeholder="Short Description" class="form-control" {{isset($job) ? 'value='.$job->short : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="description">Job Description</label>
                            <textarea name="description" style="resize: none" placeholder="Description" class="form-control">{{isset($job) ? $job->description : ''}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="fromdate">From Date</label>
                            <input type="date" name="fromdate" placeholder="From Date" class="form-control" {{isset($job) ? 'value='.$job->fromdate : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="todate">To Date</label>
                            <input type="date" name="todate" placeholder="todate" class="form-control" {{isset($job) ? 'value='.$job->todate : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="iscurrent">Current?</label>
                            <input type="checkbox" name="iscurrent" class="form-control" {{isset($job) && $job->iscurrent == '1' ? "checked" : ""}} >
                        </div>
                    </div>
                </div>
                <h3>Company Info</h3>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" name="company" placeholder="Company" class="form-control" {{isset($job) ? 'value='.$job->company : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="companydescription">Company Description</label>
                            <textarea name="companydescription" style="resize: none" placeholder="Company Description" class="form-control">{{isset($job) ? $job->companydescription : ''}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="companywebsite">Company Website</label>
                            <input type="text" name="companywebsite" placeholder="Company Website" class="form-control" {{isset($job) ? 'value='.$job->companywebsite : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="companyphone">Company Phone</label>
                            <input type="tel" name="companyphone" placeholder="Company Phone" class="form-control" {{isset($job) ? 'value='.$job->companyphone : ""}} >
                        </div>
                    </div>
                </div>
                <h3>Job Images</h3>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <label class="custom-file" id="customFile">
                            <input type="file" class="custom-file-input" id="images" name="images[]" aria-describedby="fileHelp" multiple>
                            <span class="custom-file-control form-control-file"></span>
                        </label>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Images
                    </div>
                    <div class="card-body row" id="imageCard">
                    </div>
                </div>
                <input type="submit" class="btn btn-success" value="{{isset($job) ? "Update Job" : "Create Job"}}">
            </form>
        </div>
        <!-- /.conainer-fluid -->
    </main>

@endsection

@section('jsincludes')

    <!-- Custom scripts required by this view -->
    {{--<script src="/js/views/main.js"></script>--}}
    <script src="/js/admin/jobs.js"></script>

@endsection