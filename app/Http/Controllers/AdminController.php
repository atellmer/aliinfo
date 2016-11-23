<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Functions\Upload;

class AdminController extends Controller
{
	public function __construct()
		{
			$this -> middleware('auth');
		}
	
		public function index(Post $postModel)
	{	
		$posts = $postModel -> getPublishedPosts();
		
		return view('admin.post.index', ['posts' => $posts]);
	}
	
	public function show(Post $postModel, $id)
	{
		$post = $postModel -> find($id);
		return view('admin.post.show', ['post' => $post]);
	}
	
	public function create()
	{
		return view('admin.post.create');
	}
	
	public function store(Post $postModel, Request $request, Upload $upload)
	{
		$req = $request -> all();

		if(isset($req['photo']))
		{
			$path = $upload -> getFile($req);
		}

		if(isset($path))
		{
			$req['photo'] = $path;
		}

		$postModel -> create($req);

		return redirect() -> route('admin.posts');
	}
	
	public function destroy(Post $postModel, $id)
	{
		$post = $postModel -> find($id);
		
		if(file_exists($post['photo']))
		{
			unlink($post['photo']);
		}
		
		$postModel -> destroy($id);
		
		return redirect() -> route('admin.posts');
	}
	
	public function edit(Post $postModel, $id)
	{
		$post = $postModel -> find($id);

		return view('admin.post.edit', ['post' => $post]);
	}
	
	public function update(Post $postModel, Request $request,  Upload $upload, $id)
	{
		$req = $request -> all();
		
		if(isset($req['photo']))
		{
			$path = $upload -> getFile($req);
		}

		if(isset($path))
		{
			$req['photo'] = $path;
		}

		$post = $postModel -> find($id);
		if(isset($path) && $post['photo'] != null && file_exists($post['photo']))
		{
			unlink($post['photo']);
		}

		$post -> update($req);

		return redirect() -> route('admin.posts');
	}
}