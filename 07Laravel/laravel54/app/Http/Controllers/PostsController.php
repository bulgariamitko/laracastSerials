<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Posts;
use App\Post;
use App\Tag;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Post $posts)
    {
        // $posts = $posts->all();

        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

    	return view('posts.index', compact('posts'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function store()
    {
    	$this->validate(request(), [
    		'title' => 'required|min:10',
    		'body' => 'required'
    	]);

        // method 1
        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();

        // method 2
    	// POST::create([
     //        'title' => request('title'),
     //        'body' => request('body'),
     //        'user_id' => auth()->id()
     //    ]);

        // method 3
        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        session()->flash('message', 'Your post has now been published.');

    	return redirect('/');
    }
}
