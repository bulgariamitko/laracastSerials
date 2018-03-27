<?php

namespace App\Http\Controllers;

class ThreadsSubscriptionsController extends Controller
{
	// Register a new subscriber for the conversation
    public function store(Conversation $conversation)
    {
    	auth()->user()->subscribeTo($conversation);

    	return back();
    }
}
