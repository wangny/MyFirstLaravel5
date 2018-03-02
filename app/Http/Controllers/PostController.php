<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }


    public function index(){

    	$posts = Post::latest()
            ->filter(request(['month','year']))
            ->get();
    	//therefore we can arrange from the newest to the oldest

    	return view('posts.index', compact('posts'));
    }


    public function show($id){

    	$post = Post::find($id);

    	return view('posts.show', compact('post'));
    }

    public function create(){
    	return view('posts.create');
    }

    public function store(){

    	//here is a safer way for validation that work for all browser
    	//if validation fails, will redirect to the same page
    	$this -> validate( request(),[
    		'title' => 'required|min:2',
    		'body' => 'required'

    	]);


    	// create a new post
    	// save to DB
    	// redirect to homepage

    	/* <sol 1>
    	$post = new Post;
    	$post->title = request('title');
    	$post->body = request('body');
    	$post->save();
    	*/

        auth()->user()->publish(
            new Post(request(['title','body']))
        );

        /*
    	Post::create([
    		'title' => request('title'),
    		'body' => request('body'),
            'user_id' => auth()->id()
        */

    	return redirect('/');

    }
}
