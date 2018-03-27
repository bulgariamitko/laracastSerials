<?php

namespace App;

class Podcast
{
	protected $item;

	public function __construct($item)
	{
		$this->item = $item;
	}

	public function duration()
	{
		return gmdate('i:s', $this->item->duration);
	}

	public function path()
	{
		return '/podcasts/' . $this->id;
	}

	public function __get($property)
	{
		if (isset($this->item->$property)) {
			return $this->item->$property;
		}

		throw new \Exception('Unknown property access');
		
	}
}