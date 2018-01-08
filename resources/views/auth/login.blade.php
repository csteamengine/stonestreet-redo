@extends('layouts.admin')

@section('cssincludes')
    <link href="/css/monster/css/style.css" rel="stylesheet">
@endsection

@section('content')

{{--<section id="wrapper">--}}
    {{--<div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">--}}
        {{--<div class="login-box card">--}}
            {{--<div class="card-block">--}}
                {{--<form class="form-horizontal form-material" method="POST" id="loginform" action="{{ route('login') }}">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--<h3 class="box-title m-b-20">Sign In</h3>--}}
                    {{--<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">--}}
                        {{--<div class="col-xs-12">--}}
                            {{--<input class="form-control" type="text" required name="email" value="{{ old('email') }}" placeholder="Email">--}}
                        {{--</div>--}}
                        {{--@if ($errors->has('email'))--}}
                            {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                        {{--<div class="col-xs-12">--}}
                            {{--<input class="form-control" type="password" name="password" required placeholder="Password">--}}
                            {{--@if ($errors->has('password'))--}}
                                {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<div class="checkbox checkbox-primary pull-left p-t-0">--}}
                                {{--<input id="checkbox-signup" type="checkbox">--}}
                                {{--<label for="checkbox-signup"> Remember me </label>--}}
                            {{--</div>--}}
                            {{--<a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group text-center m-t-20">--}}
                        {{--<div class="col-xs-12">--}}
                            {{--<button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">--}}
                            {{--<div class="social">--}}
                                {{--<a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>--}}
                                {{--<a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<div class="col-md-8 col-md-offset-4">--}}
                            {{--<button type="submit" class="btn btn-primary">--}}
                                {{--Login--}}
                            {{--</button>--}}

                            {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                {{--Forgot Your Password?--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group m-b-0">--}}
                        {{--<div class="col-sm-12 text-center">--}}
                            {{--<p>Don't have an account? <a href="register.html" class="text-info m-l-5"><b>Sign Up</b></a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <form id="login-form" method="POST" action="{{route("login")}}">
                            {{ csrf_field() }}

                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <input type="submit" class="btn btn-primary px-4" value="Login">
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{route('register')}}">
                                        Register
                                    </a>
                                    &nbsp;
                                    <a href="{{route('password.request')}}">
                                        Forgot Password
                                    </a>
                                </div>
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
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/js/monster/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/js/monster/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/js/monster/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    {{--<script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>--}}
    <!--Custom JavaScript -->
    <script src="/js/monster/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    {{--<script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>--}}
@endsection
