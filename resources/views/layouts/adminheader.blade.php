<?php
/**
 * Created by PhpStorm.
 * User: gregorysteenhagen
 * Date: 1/7/18
 * Time: 8:51 PM
 */
 ?>

<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    {{--<a class="navbar-brand" href="#"></a>--}}
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="images/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
                <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-lock"></i> Logout</a>
            </div>
        </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>

</header>
