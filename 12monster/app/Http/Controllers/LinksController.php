<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queries\CommunityLinksQuery;

class LinksController extends Controller
{
	public function index()
	{
	    $links = CommunityLinksQuery::get($channel);

	    return view('community.links', compact('links'));
	}

}