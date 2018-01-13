<?php
/**
 * Created by PhpStorm.
 * User: gregory
 * Date: 12/21/17
 * Time: 12:28 AM
 */

?>
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
                <form action="{{route('adminUpdateProject', $project->id)}}" method="PUT">
            @else
                <form action="{{route('adminCreateProject')}}" method="POST">
            @endif
                <input type="text" name="title" placeholder="Project Title" class="form-control" {{isset($project) ? 'value='.$project->title : ""}} >
                <input type="text" name="short" placeholder="Project Title" class="form-control" {{isset($project) ? 'value='.$project->short : ""}} >
                <textarea name="description" style="resize: none" class="form-control">{{isset($project) ? $project->description : ''}}</textarea>
                <input type="date" name="projectstart" placeholder="Project Start" class="form-control" {{isset($project) ? 'value='.$project->projectstart : ""}} >
                <input type="date" name="projectend" placeholder="Project Ed" class="form-control" {{isset($project) ? 'value='.$project->projectend : ""}} >

                <p>TODO add Images</p>
                <input type="submit" class="btn btn-success" value="{{isset($project) ? "Update Project" : "Create Project"}}">
            </form>

        </div>
        <!-- /.conainer-fluid -->
    </main>

@endsection

@section('jsincludes')

<script src="js/pace.min.js"></script>

<!-- Plugins and scripts required by all views -->
<script src="js/Chart.min.js"></script>

<!-- Plugins and scripts required by this views -->

<!-- Custom scripts required by this view -->
<script src="js/views/main.js"></script>

@endsection