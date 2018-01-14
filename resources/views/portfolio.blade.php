<?php
/**
 * Created by PhpStorm.
 * User: gregorysteenhagen
 * Date: 1/13/18
 * Time: 6:28 PM
 */

?>
@extends('layouts/app')

@section('cssincludes')
    {{--TODO add any css includes that are needed for this page.--}}
@endsection

@section('content')

    <ul class="nav nav-pills mb-3 row text-center" id="pills-tab" role="tablist">
        <div class="col-4 col-md-2 ml-auto">
            <li class="nav-item ml-auto">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-websites" role="tab" aria-controls="pills-home" aria-selected="true">Websites</a>
            </li>
        </div>
        <div class="col-4 col-md-2">
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-software" role="tab" aria-controls="pills-profile" aria-selected="false">Software</a>
            </li>
        </div>
        <div class="col-4 col-md-2 mr-auto">
            <li class="nav-item mr-auto">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-hardware" role="tab" aria-controls="pills-contact" aria-selected="false">Hardware</a>
            </li>
        </div>
    </ul>
    <div class="row">
        <div class="tab-content col-12 m-auto" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-websites" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row text-center project-grid">
                    @foreach($websites as $website)
                        <a href="{{route('project', $website->id)}}"  class="project">
                            <div class="project-image" style="background-image: url('{{$website->image->path}}')" >
                                <div class="overlay"></div>
                            </div>
                            <div class="project-title">
                                {{$website->title}}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-software" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row text-center project-grid">
                    @foreach($software as $proj)
                        <a href="{{route('project', $proj->id)}}"  class="project">
                            <div class="project-image" style="background-image: url('{{$proj->image->path}}')" >
                                <div class="overlay"></div>
                            </div>
                            <div class="project-title">
                                {{$proj->title}}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-hardware" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row text-center project-grid">
                    @foreach($hardware as $hard)
                        <a href="{{route('project', $hard->id)}}"  class="project">
                            <div class="project-image" style="background-image: url('{{$hard->image->path}}')" >
                                <div class="overlay"></div>
                            </div>
                            <div class="project-title">
                                {{$hard->title}}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


@section('jsincludes')
    {{--TODO add any javascript tags that are needed for this page.--}}
@endsection
