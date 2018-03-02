<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public  function scopeIncomplete($query){
    	//task:incomplete(), but can add further filter
    	return $query->where('complete',0)->get(_);
    }
}
