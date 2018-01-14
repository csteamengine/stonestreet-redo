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
            <li class="breadcrumb-item active">{{isset($project) ? "Edit Project" : "Add Project"}}</li>
        </ol>

        <div class="container-fluid">

            {{--<h1>{{isset($project) ? "Edit Project" : "Add Project"}}</h1>--}}
            <form action="{{ isset($project) ? route('adminUpdateProject', $project->id) : route('adminCreateProject')}}" method={{ isset($project) ? "PUT" : "POST"}} enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="title">Project Title</label>
                            <input type="text" name="title" placeholder="Project Title" class="form-control" {{isset($project) ? 'value='.$project->title : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="categoryid">Category</label>
                            <select name="categoryid" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{isset($project) && $category->id == $project->categoryid ? "selected" : ""}} >{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="short">Short Description</label>
                            <input type="text" name="short" placeholder="Short Description" class="form-control" {{isset($project) ? 'value='.$project->short : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" style="resize: none" placeholder="Description" class="form-control" rows="15">{{isset($project) ? $project->description : ''}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="projectwebsite">Project Website</label>
                            <input type="text" name="projectwebsite" placeholder="Project Website" class="form-control" {{isset($project) ? 'value='.$project->projectwebsite : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="projectgithub">Project Github</label>
                            <input type="text" name="projectgithub" placeholder="Project Github" class="form-control" {{isset($project) ? 'value='.$project->projectwebsite : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="projectstart">Project Start</label>
                            <input type="date" name="projectstart" placeholder="Project Start" class="form-control" {{isset($project) ? 'value='.$project->projectstart : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="projectend">Project End</label>
                            <input type="date" name="projectend" placeholder="Project End" class="form-control" {{isset($project) ? 'value='.$project->projectend : ""}} >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-md-6">
                        <div class="form-group">
                            <label for="iscompleted">Completed?</label>
                            <input type="checkbox" name="iscompleted" class="form-control" {{isset($project) && $project->iscompleted == '1' ? "checked" : ""}} >
                        </div>
                    </div>
                </div>
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