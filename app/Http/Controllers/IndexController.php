<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function index(Post $postModel)
	{	
		$posts = $postModel -> getPublishedPosts();
		
		return view('post.index', ['posts' => $posts]);
	}
	
	public function show(Post $postModel, $id)
	{
		$post = $postModel -> find($id);
		return view('post.show', ['post' => $post]);
	}
	
	public function register()
	{
		return redirect() -> route('root');
	}
	
}