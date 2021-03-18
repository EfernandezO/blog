<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //relacion n*1
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    //releacion n*m
    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

    //relacion 1*1 poliformica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
