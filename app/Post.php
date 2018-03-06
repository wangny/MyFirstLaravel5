<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Comment;

class Post extends Model
{
    protected $fillable = ['title', 'body'];
    //use this so that we can use Post::Create
    //alter way : $guarded = ['the field that not allowed modified']

    public function comments(){
    	//post -> find comments 
    	return $this->hasMany(Comment::class);  //or 'App\Comment'
    }

    public function addComment($body){

        $comment = new Comment;
        $comment->body = $body;
        $comment->user_id = auth()->id();

        $this->comments()->save( $comment ) ;
        

    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filter){

        if (isset($filter['month'])){
            $query->whereMonth('created_at',Carbon::parse($filter['month'])->month);   
        }
        if (isset($filter['year'])){
            $query->whereYear('created_at',$filter['year']);
        }

    }

    public static function archives(){
        return  static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
                    ->groupBy('year','month')
                    ->orderByRaw('min(created_at) desc')
                    ->get()
                    ->toArray();
    }

}
