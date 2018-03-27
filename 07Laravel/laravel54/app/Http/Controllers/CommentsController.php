<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
    	// validation
    	$this->validate(request(), [
    		'body' => 'required|min:2'
    	]);

    	// add a comment to a post
    	// method 1 
    	// Comment::create([
    	// 	'body' => request('body'),
    	// 	'post_id' => $post->id
    	// ]);

    	// method 2
    	$post->addComment(request('body'));

    	return back();
    }
}
