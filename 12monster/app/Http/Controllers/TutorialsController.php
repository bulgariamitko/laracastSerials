<?php

namespace App\Http\Controllers;

use App\Tutorials\TweetsTutorial;
use App\Tutorials\PublishesTutorial;

class TutorialsController extends Controller
{
    public function store()
    {
    	$tutorial = new TweetsTutorial(new PublishesTutorial);

    	return $tutorial->publish();
    }
}
