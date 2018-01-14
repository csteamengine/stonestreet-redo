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
    <link href="/css/about.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-12 text-center mb-2">
            <h2 class="text-uppercase ">Charlie Steenhagen</h2>
            <p class="text-muted">Full-Stack Web Developer/Software Engineer</p>
        </div>
        <div class="col-10 m-auto">
            <div class="row">
                <div class="col-12 mb-4 col-sm-8 col-md-4 col-xl-4 ml-auto mr-auto  mt-sm-5 mb-sm-5 mt-md-0">
                    <img src="{{$image->path}}" style="width: 100%;" class="img-fluid">
                </div>
                <div class="col-12 col-md-8 col-xl-4 ">
                    <p class="text-uppercase font-weight-bold">Professional Profile</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere orci nec mi malesuada, porttitor finibus nisi posuere. Pellentesque vel metus faucibus metus placerat tincidunt. Sed vel hendrerit nulla, nec vestibulum justo. Praesent a magna lorem. Nullam eu augue interdum, congue diam sed, pellentesque felis. Sed sollicitudin lorem eu efficitur eleifend. Quisque vehicula rutrum lacus, ut imperdiet urna pellentesque ac. Phasellus condimentum scelerisque orci ac elementum. Vestibulum quis velit tristique, convallis orci ut, mattis est. Integer non tristique neque, ut semper nulla. Aliquam scelerisque finibus fringilla. Aenean pharetra consequat ipsum vitae blandit.
                    </p>
                </div>
                <div class="col-12 col-md-12 col-xl-4 col-xl-4 mb-5">
                    <p class="text-uppercase font-weight-bold">My Skills</p>
                    <div class="row">
                        <div class="col-12 mb-2">
                            <div class="progress-custom">
                                <div class="progress-bar-custom" style="width: 90%;">
                                    <div class="row progress-text">
                                        <div class="col-6">
                                            <p class="progress-skill"><small>PHP</small></p>
                                        </div>
                                        <div class="col-6 text-right ml-auto">
                                            <p class="progress-percent">90%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="progress-custom">
                                <div class="progress-bar-custom" style="width: 80%;">
                                    <div class="row progress-text">
                                        <div class="col-6">
                                            <p class="progress-skill"><small>Java</small></p>
                                        </div>
                                        <div class="col-6 text-right ml-auto">
                                            <p class="progress-percent">80%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="progress-custom">
                                <div class="progress-bar-custom" style="width: 85%;">
                                    <div class="row progress-text">
                                        <div class="col-6">
                                            <p class="progress-skill"><small>ColdFusion</small></p>
                                        </div>
                                        <div class="col-6 text-right ml-auto">
                                            <p class="progress-percent">85%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="progress-custom">
                                <div class="progress-bar-custom" style="width: 85%;">
                                    <div class="row progress-text">
                                        <div class="col-8">
                                            <p class="progress-skill"><small>Database&nbsp;Management</small></p>
                                        </div>
                                        <div class="col-4 text-right ml-auto">
                                            <p class="progress-percent">85%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="progress-custom">
                                <div class="progress-bar-custom" style="width: 75%;">
                                    <div class="row progress-text">
                                        <div class="col-6">
                                            <p class="progress-skill"><small>Front&nbsp;End&nbsp;Languages</small></p>
                                        </div>
                                        <div class="col-6 text-right ml-auto">
                                            <p class="progress-percent">75%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="progress-custom">
                                <div class="progress-bar-custom" style="width: 70%;">
                                    <div class="row progress-text">
                                        <div class="col-6">
                                            <p class="progress-skill"><small>Git&nbsp;&&nbsp;Version&nbsp;Control</small></p>
                                        </div>
                                        <div class="col-6 text-right ml-auto">
                                            <p class="progress-percent">70%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="progress-custom">
                                <div class="progress-bar-custom" style="width: 50%;">
                                    <div class="row progress-text">
                                        <div class="col-6">
                                            <p class="progress-skill"><small>Design&nbsp;Patterns</small></p>
                                        </div>
                                        <div class="col-6 text-right ml-auto">
                                            <p class="progress-percent">50%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10 ml-auto mr-auto mt-5 mb-5">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 text-center mb-3">
                            <h2>A Look Into My Life</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($images as $curr)
                            <div class="col-lg-3 col-md-4 col-sm-4 col-6 m-auto text-center">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid" src="{{$curr->path}}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('jsincludes')
    {{--TODO add any javascript tags that are needed for this page.--}}
@endsection
