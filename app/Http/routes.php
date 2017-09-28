<?php

use App\Post;
use App\User;
use App\Country;
use App\Photo;
use App\Tag;
use App\Video;

//Route::get('/read', function(){
//	$posts = Post::all();
//	foreach($posts as $post){
//			return $post->title;
//	}
//});

//Route::get('/find', function(){
//	$post = Post::find(1);
//	return $post->title;
//});

//Route::get('/findwhere', function(){
//	$posts = Post::where('is_admin', 0)->orderBy('id', 'desc')->take(1)->get();
//	return $posts;
//});

//Route::get('/basicinsert', function(){
//	$post = new Post;
//	$post->title = 'New Eloquent Title';
//	$post->content = 'Wow Elquent is really cool';
//	$post->save();
//});

//Route::get('/create', function(){
//	Post::create(['title' => 'create method', 'content' => 'saya belajar banyak hari ini']);	
//});

//Route::get('/basicupdate', function(){
//	$post = Post::find(2);
//	$post->title = 'Update Eloquent Title';
//	$post->content = 'Update Eloquent Content';
//	$post->save();
//});

//Route::get('/update', function(){
//	Post::where('id', 2)->where('is_admin', 0)->update(['title' => 'NEW PHP TITLE', 'content' => 'I love learning Laravel']);	
//});

//Route::get('/delete', function(){
//	$post = Post::find(2);
//	$post->delete();
//});

//Route::get('/delete2', function(){
//	Post::destroy([1,2]);
//});

//Route::get('/softdelete', function(){
//	Post::find(4)->delete();
//});

//Route::get('/readsoftdelete', function(){
	//$post = Post::find(4);
	//return $post;
	
//	$post = Post::onlyTrashed()->get();
//	return $post;
//});

//Route::get('/restore', function(){
//	Post::withTrashed()->where('id', 4)->restore();
//});

//Route::get('/forcedelete', function(){
//	Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//});

//One to One Relationships
//Route::get('user/{id}/post', function($id){
//	return User::find($id)->post->title;
//});

//One to Many Relationship
//Route::get('/posts', function(){
//	$user = User::find(3);
	
//	foreach($user->posts as $post){
//		echo $post->title;
//	}
//});

//Many to Many Relationship 
//Route::get('/user/{id}/role', function($id){
//		$user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//		return $user;
		//foreach($user->roles as $role){
		//	return $role->name;
		//}
//});

//Accessing the Intermediate table/pivot
//Route::get('user/pivot', function(){
//	$user = User::find(1);
	
//	foreach($user->roles as $role){
//			echo $role->pivot->created_at;
//	}
//});

//latihan
//Route::get('user/{id}/pivot', function($id){
//	$user = User::find($id);
	
//	foreach($user->roles as $role){
//			echo $role->pivot->created_at;
//	}
//});

//latihan
//Route::get('/user/{id}/posts', function($id){
//	$user = User::find($id);
	
//	foreach($user->posts as $post){
//		echo $post->title;
//	}
//});

//Route::get('/post/{id}/user', function($id){
//	return Post::find($id)->user->name;
//});

//Has MAny through relation
//Route::get('/user/country', function(){
//	$country = Country::find(1);
	
//	foreach($country->posts as $post){
//			return $post->title;
//	}
//});

//Latihan membuat pilihan country dinamis dgn route
//Route::get('/user/country/{id}', function($id){
//	$country = Country::find($id);
	
//	foreach($country->posts as $post){
//			return $post->title;
//	}
//});


//Polymorphic relations
//Route::get('/post/photos', function(){
//	$post = Post::find(1);
	
//	foreach($post->photos as $photo){
//		return $photo->path;
//	}
//});

//Route::get('/user/photos', function(){
//	$user = User::find(1);
	
//	foreach($user->photos as $photo){
//			return $photo->path;
//	}
//});

//Latihan modifikasi foto dr user/post tampil sesuai id pada Url
//Route::get('/post/photos/{id}', function($id){
//	$post = Post::find($id);
	
//	foreach($post->photos as $photo){
//		return $photo->path;
//	}
//});

//Route::get('/user/photos/{id}', function($id){
//	$user = User::find($id);
	
//	foreach($user->photos as $photo){
//			return $photo->path;
//	}
//});

//Polymorphic Relation the inverse
//Route::get('photo/{id}/post', function($id){
//	$photo = Photo::findOrFail($id);
//	return $photo->imageable;
//});

//Polymorphic Many to Many
//Route::get('/post/tag', function(){
//	$post = Post::find(1);
//	foreach($post->tags as $tag){
//			echo $tag->name;
//	}
//});

//Latihan Polymorphic Many to Many menjadi dinamis dengan Url
//Route::get('/post/tag/{id}', function($id){
//	$post = Post::find($id);
//	foreach($post->tags as $tag){
//			echo $tag->name;
//	}
//});

//Latihan Polymorphic Many to Many menjadi dinamis dengan url(video)
//Route::get('/video/tag/{id}', function($id){
//	$video = Video::find($id);
//	foreach($video->tags as $tag){
//			echo $tag->name;
//	}
//});

//Polymorphic Many to Many - retrieving owner
//Route::get('/tag/post', function(){
//	$tag = Tag::find(1);
//	foreach($tag->posts as $post){
//			echo $post->title;
//	}
//});




Route::resource('/post', 'PostController');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


/*Route::get('/insert', function(){
	DB::insert("INSERT INTO posts(title, content) values(?, ?)",
		['PHP with Laravel', 'Laravel is the Best Thing that happen to PHP']);
});

Route::get('/read', function(){
	$results = DB::select("SELECT * FROM posts WHERE id = ?", [1]);
		foreach($results as $post){
		return $post->title;
	 }
	//return $results;
});

Route::get('/update', function(){
	$updated = DB::update("UPDATE posts SET title = 'Update title' WHERE id = ?", [1]);
	return $updated;
});


Route::get('/delete', function(){
	$deleted = DB::delete("DELETE FROM posts WHERE id =?", [1]);
	return $deleted;
	
});
*/

























