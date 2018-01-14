<?php
/**
 * Created by PhpStorm.
 * User: gregorysteenhagen
 * Date: 1/14/18
 * Time: 1:03 AM
 */
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

<div class="container">
    <div class="card  mb-5">
        <div class="card-header">
            New Message From {{$emailMessage->name}}
        </div>
        <div class="card-body text-left">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>Email: <a href="mailto:{{$emailMessage->email}}"> <small class="text-muted">{{$emailMessage->email}}</small></a> </h3>
                </div>
                <div class="col-12 col-md-6">
                    <h3>Phone: <small class="text-muted">{{$emailMessage->phone}}</small> </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>{{$emailMessage->message}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>