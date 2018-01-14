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
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 m-auto text-center">
                    <img src="{{$image->path}}" class="img-fluid img-thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 m-auto text-center">
                    <div class="row">
                        <div class="col-12">
                            <h2>A Little About Me</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>
                                My name is Charlie Steenhagen and I am a Software Engineer from Ames, Iowa. I graduated from Iowa State University in 2017, and have been working
                                as an engineer ever since.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-12 m-auto">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2>A Look Into My Life</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($images as $curr)
                            <div class="col-lg-3 col-md-4 col-xs-6 m-auto text-center">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail" src="{{$curr->path}}" alt="">
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
