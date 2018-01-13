<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Project extends Model
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

    public function images(){
        return $this->hasManyThrough('App\Image', 'App\ProjectImage', 'projectid', 'id');
    }

    public function image(){
        return $this->hasOne('App\Image', 'id', 'imageid');
    }

    public function category(){
        return $this->hasOne('App\Category', 'id', 'categoryid');
    }

}
