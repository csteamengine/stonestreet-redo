<?php
/**
 * Created by PhpStorm.
 * User: gregory
 * Date: 12/21/17
 * Time: 12:28 AM
 */

?>
@section('cssincludes')
    <link rel="stylesheet" type="text/css" href="/css/DataTables/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/DataTables/datatables.min.css"/>
@endsection
@extends('layouts/admin')
@section('content')


    <!-- Main content -->
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Projects</li>

            {{--<!-- Breadcrumb Menu-->--}}
            {{--<li class="breadcrumb-menu d-md-down-none">--}}
                {{--<div class="btn-group" role="group" aria-label="Button group">--}}
                    {{--<a class="btn" href="#"><i class="icon-speech"></i></a>--}}
                    {{--<a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>--}}
                    {{--<a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>--}}
                {{--</div>--}}
            {{--</li>--}}
        </ol>

        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <h1>Projects</h1>
                </div>
                <div class="col-3 ml-auto text-right">
                    <a href="{{route('adminAddProject')}}" class="btn btn-success">
                        <i class="icon-plus icons font-2xl"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>Projects
                        </div>
                        <div class="card-body">
                            <table id="projects" class="display text-center" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Short</th>
                                    <th>Category</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Short</th>
                                    <th>Category</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        <td>{{$project->title}}</td>
                                        <td>{{$project->short}}</td>
                                        <td>{{$project->category->title}}</td>
                                        <td>{{$project->projectstart}}</td>
                                        <td>{{$project->projectend}}</td>
                                        <td>
                                            <a href="{{route('adminEditProject', $project->id)}}" class="custom-icon-link">
                                                <i class="icon-pencil icons font-2xl"></i>
                                            </a>
                                            <a href="{{$project->isactive == 1 ? route('adminDeactivateProject', $project->id) : route('adminActivateProject', $project->id)}}" class=" custom-icon-link">
                                                <i class="{{$project->isactive == 1 ? 'icon-arrow-up icons text-success' : 'icon-arrow-down icons text-danger'}} font-2xl"></i>
                                            </a>
                                            <a href="{{route('adminDeleteProject', $project->id)}}" class="custom-icon-link text-danger">
                                                <i class="icons icon-trash font-2xl"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.conainer-fluid -->
    </main>

@endsection

@section('jsincludes')


<script type="text/javascript" src="/js/DataTables/datatables.min.js"></script>
<script >
    $(document).ready(function() {
        $('#projects').DataTable();
    } );
</script>



@endsection