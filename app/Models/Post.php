<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
	protected $guarded = ['_token'];
    
	public function getPublishedPosts()
	{	
		
		$posts = $this 
					-> latest('created_at')
					-> paginate(env('PAGINATION', 6));
		
		return $posts;
	}

	public function getLastModified()
	{	
		
		$lastModified = gmdate('D, d M Y H:i:s').' GMT';
		
		return $lastModified;
	}
}