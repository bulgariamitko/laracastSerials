<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
    	$posts = Post::where('id', '>=', 160)->get();

    	return $posts;
    }
}
