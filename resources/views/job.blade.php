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
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="/{{$job->image->path}}">
                    </div>
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
                    <h2 class="mb-0" ><small>{{$job->title}}</small></h2>
                    <p class="text-muted mb-0">{{$job->short}}</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 text-center">
                    <h3 class="mt-3 mb-0"><small>Dates</small></h3>
                    <p class="text-muted mb-0">{{date('m/d/Y', strtotime($job->fromdate))}} - {{$job->iscurrent == "1" ? "Current" : date('m/d/Y', strtotime($job->todate))}}</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 text-center">
                    <h3 class="mt-3 mb-0"><small>Company</small></h3>
                    <p class="text-muted mb-0">{{$job->company}}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-10 col-xl-10 mb-5 mt-3 mr-auto ml-auto">
            <p class="text-uppercase mb-0 font-weight-bold">Project Description</p>
            <p><small>{{$job->description}}</small></p>
        </div>

    </div>
@endsection


@section('jsincludes')
    {{--TODO add any javascript tags that are needed for this page.--}}
@endsection

