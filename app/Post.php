<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   //model table post 
    protected $table = 'posts';

    public function author(){
        //relation entre un post et un user 
        return $this->belongsTo('App\User','id');

    }
}
