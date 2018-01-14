<?php
/**
 * Created by PhpStorm.
 * User: gregorysteenhagen
 * Date: 1/13/18
 * Time: 11:32 PM
 */
?>

@extends('layouts/app')

@section('cssincludes')
    {{--TODO add any css includes that are needed for this page.--}}
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6 ml-xl-auto mr-xl-0 m-auto">
            <div id="imgCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-overlay"></div>
                    <?php
                    $first = true;
                    ?>
                    @foreach($project->images as $curr)
                        <div class="carousel-item  {{$first ? "active" : ""}}">
                            <img class="d-block w-100 img-fluid" src="/{{$curr->path}}">
                        </div>
                        <?php
                        $first = false;
                        ?>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#imgCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imgCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mr-xl-auto ml-xl-0 m-auto">
            <div class="row mb-0">
                <div class="col-12 text-center mt-5">
                    <h1 class="mb-0" ><small>{{$project->title}}</small></h1>
                    <p class="text-muted mb-0">{{$project->short}}</p>
                    <p class="text-muted mb-0">{{date('m/d/Y', strtotime($project->projectstart))}} - {{$project->iscompleted == 1 ? date('m/d/Y', strtotime($project->projectend)) : "On Going"}}</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 text-center">
                    <a href="#" class="fa fa-globe text-muted fa-2x ml-3 mr-3 mt-0 project-links"></a>
                    <a href="#" class="fa fa-github text-muted fa-2x ml-3 mr-3 mt-0 project-links"></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-10 col-xl-10 mb-5 mt-3 mr-auto ml-auto">
            <p class="text-uppercase mb-0 font-weight-bold">Project Description</p>
            <p><small>{{$project->description}}</small></p>
        </div>

    </div>
@endsection


@section('jsincludes')
    {{--TODO add any javascript tags that are needed for this page.--}}
    <script>
        $(window).on('load', function(){
            $('#imgCarousel').carousel()
        });
    </script>
@endsection

