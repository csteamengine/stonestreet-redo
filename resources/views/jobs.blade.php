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
    <div class="row text-center project-grid">
        @foreach($jobs as $job)
            <a href="{{route('job', $job->id)}}"  class="project">
                <div class="project-image" style="background-image: url('{{$job->image->path}}')" >
                    <!-- <div class="overlay"></div> -->
                </div>
                <div class="project-title">
                    {{$job->title}}
                </div>
            </a>
        @endforeach
    </div>
@endsection


@section('jsincludes')
    {{--TODO add any javascript tags that are needed for this page.--}}
@endsection
