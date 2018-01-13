<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class JobImage extends Model
{
    use Notifiable;

    protected $table = 'jobimages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imageid', 'jobid', 'isactive'
    ];
}
