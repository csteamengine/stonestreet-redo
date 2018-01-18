<?php
/**
 * Created by PhpStorm.
 * User: gregory
 * Date: 12/21/17
 * Time: 12:41 AM
 */
?>
<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar10">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar10">
        <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item text-center">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="{{route('jobs')}}">Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<div id="homeSection" class="{{Request::is('/') ? "home" : ""}}">
    <div class="overlay"></div>
    <div id="logo">
        <img src="/images/OneSLogoOrange.png">
    </div>
</div>