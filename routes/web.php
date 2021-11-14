<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/tasks', 'TaskController@index');

//Route::get('/tasks/{tasks}', 'TaskController@show');

//Route::get('/', 'PostController@index');

Route::post('/posts', 'PostController@store');

Route::get('/posts/create', 'PostController@create');

Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Auth::routes();

Route::get('/', 'PostController@index')->name('home');	//this will specifiy that '/' is home page


/*
Route::get('/', function () {  // '/' -> homepage
    return view('welcome');
});


Route::get('/about', function() {  //also workable /wo '/'
	
//	$tasks = [
//		'go to the store',
//		'but sth',
//		'go back home'
//	];

	$tasks = DB::table('tasks')->get();


	return view('about', compact('tasks'));
});

Route::get('/tasks', function() {  
	

	//$tasks = DB::table('tasks')->get();

	$task = App\Task::all();

	return view('tasks.index', compact('tasks'));
});


Route::get('/tasks/{tasks}', function($id) {  // {} means can be specific, like a certain id
	
	//dd($id);  //die and dump

	//$task = DB::table('tasks')->find($id);

	$task = App\Task::find($id);	//or "use App\Task;" to import it in advance 

	return view('tasks.show', compact('task'));
});
*/


