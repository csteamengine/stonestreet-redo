<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Project extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'categoryid', 'shortdescription', 'description', 'projectdate', 'isactive', 'ishighlight', 'created_at', 'updated_at'
    ];

}
