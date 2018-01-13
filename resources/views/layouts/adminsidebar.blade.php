<?php
/**
 * Created by PhpStorm.
 * User: gregorysteenhagen
 * Date: 1/7/18
 * Time: 8:51 PM
 */

?>

<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin')}}"><i class="icon-speedometer"></i> Dashboard</a>
            </li>
            {{--<li class="divider"></li>--}}
            {{--<li class="nav-title">--}}
                {{--UI Elements--}}
            {{--</li>--}}
            <li class="nav-item">
                <a class="nav-link" href="{{route('adminProjects')}}"><i class="icon-speedometer"></i> Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('adminJobs')}}"><i class="icon-speedometer"></i> Jobs</a>
            </li>
            {{--<li class="nav-item nav-dropdown">--}}
                {{--<a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Components</a>--}}
                {{--<ul class="nav-dropdown-items">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="components-buttons.html"><i class="icon-puzzle"></i> Buttons</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="components-social-buttons.html"><i class="icon-puzzle"></i> Social Buttons</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}



        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
