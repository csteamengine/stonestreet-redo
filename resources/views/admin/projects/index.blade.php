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
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
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

            <h1>Projects</h1>
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