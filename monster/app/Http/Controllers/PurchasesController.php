<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\UseCases\PurchasePodcast;
use App\Jobs\PurchasePodcast;

class PurchasesController extends Controller
{
    public function store()
    {
    	// 1 way
    	// PurchasePodcast::perform();

    	// 2 way
    	// if we have args - dispatch(new PurchasePodcast);
    	dispatch(new PurchasePodcast);

    	return 'Done';
    }
}