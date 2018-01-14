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
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="row mb-5">
                <div class="col-12">
                    <h1>Let's Talk</h1>
                    <h6><small class="text-muted">Drop me a line or give me a ring</small></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5 ml-auto mr-auto">
                    <div class="card  mb-5">
                        <div class="card-header">
                            Give Me A Ring
                        </div>
                        <div class="card-body text-left">
                            <div class="row">
                                <div class="col-12">
                                    <h2>Contact</h2>
                                </div>
                            </div>
                            <div class="row">
                                {{--TODO add contact info here.--}}
                                {{--<p>Phone: 5155200549</p>--}}
                                {{--<p>Email: csteen1005@gmail.com</p>--}}
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h2>Links</h2>
                                </div>
                            </div>
                            <div class="row">
                                {{--//TODO github, linkedin, facebook, pinterest--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2 m-auto">
                    <h1><small class="text-muted">OR</small></h1>
                </div>
                <div class="col-12 col-md-5 ml-auto mr-auto">
                    <div class="card  mb-5">
                        <div class="card-header">
                            Drop Me A Line
                        </div>
                        <div class="card-body text-left">
                            <form id="contactForm" action="{{route('sendEmail')}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder="Email Address" required>
                                    {{--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name" placeholder="Your Name" required>
                                    {{--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" id="phone" aria-describedby="phone" placeholder="Your Phone" name="phone">
                                    {{--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" class="form-control" id="message" rows="6" placeholder="Message" style="resize: none" required></textarea>
                                    {{--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                                </div>
                                <div class="form-group float-right">
                                    <input type="submit" class="btn btn-secondary" value="Send Email">
                                    {{--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('jsincludes')
    {{--TODO add any javascript tags that are needed for this page.--}}
@endsection
