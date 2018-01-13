<?php
/**
 * Created by PhpStorm.
 * User: gregory
 * Date: 12/21/17
 * Time: 12:28 AM
 */

?>
@section('cssincludes')
    <link rel="stylesheet" href="/css/admin/projects.css">
@endsection
@extends('layouts/admin')
@section('content')


    <!-- Main content -->
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Projects</li>
            <li class="breadcrumb-item active">Add Project</li>
        </ol>

        <div class="container-fluid">

            <h1>Add Project</h1>
            @if(isset($project))
                <form action="{{route('adminUpdateProject', $project->id)}}" method="PUT" enctype="multipart/form-data">
            @else
                <form action="{{route('adminCreateProject')}}" method="POST" enctype="multipart/form-data">
            @endif
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="text" name="title" placeholder="Project Title" class="form-control" {{isset($project) ? 'value='.$project->title : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="text" name="short" placeholder="Project Title" class="form-control" {{isset($project) ? 'value='.$project->short : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <textarea name="description" style="resize: none" class="form-control">{{isset($project) ? $project->description : ''}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="date" name="projectstart" placeholder="Project Start" class="form-control" {{isset($project) ? 'value='.$project->projectstart : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="date" name="projectend" placeholder="Project End" class="form-control" {{isset($project) ? 'value='.$project->projectend : ""}} >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-10 col-md-6">
                        <label class="custom-file" id="customFile">
                            <input type="file" class="custom-file-input" id="images" aria-describedby="fileHelp" multiple>
                            <span class="custom-file-control form-control-file"></span>
                        </label>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Images
                    </div>
                    <div class="card-body" id="imageCard">
                        This is some text within a card body.
                    </div>
                </div>
                <input type="submit" class="btn btn-success" value="{{isset($project) ? "Update Project" : "Create Project"}}">
            </form>

        </div>
        <!-- /.conainer-fluid -->
    </main>

@endsection

@section('jsincludes')

<!-- Custom scripts required by this view -->
{{--<script src="/js/views/main.js"></script>--}}
<script src="/js/admin/projects.js"></script>

@endsection