<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ProjectImage extends Model
{
    use Notifiable;

    protected $table = 'projectimages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imageid', 'projectid', 'isactive'
    ];

}
