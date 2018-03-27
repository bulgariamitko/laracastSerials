<?php

namespace App\Http\Controllers;

use Cache;
use App\Podcast;
use GuzzleHttp\Client As Guzzle; // it is not importated

class PodcastController extends Controller
{
	protected $guzzle;

	public function __construct(Guzzle $guzzle)
	{
		$this->guzzle = $guzzle;
	}

	public function index()
	{
		$feed = $this->fetchFeed();

		return view('padcast.index', compact('feed'));
	}

	public function fetchFeed()
	{
		return Cache::remember('podcast', 60 * 24 * 7, function() {
			$endpoint = 'https://api.simplecast.com/v1/podcasts/1486/episodes.json?api_key=' . config('services.simplecast.key');

			$feed = json_decode($this->guzzle->get($endpoint)->getBody());

			return collect($feed)->map(function ($podcast) {
				return new Podcast($podcast);
			});
		});
	}
}