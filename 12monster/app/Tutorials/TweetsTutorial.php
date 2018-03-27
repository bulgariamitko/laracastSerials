<?php

namespace App\Tutorials;

class TweetsTutorial
{
	protected $tutorial;

	public function __construct($tutorial)
	{
		$this->tutorial = $tutorial;
	}

	public function publish()
	{
		$tutorial = $this->tutorial->publish();

		echo "<pre>";
		print_r('tweet the tutorial.');
		echo "</pre>";
	}
}