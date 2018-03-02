<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body'];

    public function post(){
    	//comment -> post
    	return $this->belongsTo(Post::class);
    }

    public function user(){
    	//comment -> post
    	return $this->belongsTo(User::class);
    }
}
