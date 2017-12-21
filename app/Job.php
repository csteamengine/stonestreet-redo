<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Job extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'employer', 'iscurrent', 'isactive', 'fromdate', 'todate', 'employerphone', 'employeraddress', 'created_at'
    ];

}
