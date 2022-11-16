<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['title', 'content', 'slug'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
