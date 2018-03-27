<?php

interface CompressionStrategy
{
	public function fire();
}

class JavaScriptStrategy implements CompressionStrategy
{
	protected $files;
	protected $destination;

	public function __construct($files, $destination)
	{
		$this->files = $files;
		$this->destination = $destination;
	}

	public function fire()
	{
		// Compressing JavaScript-specific src files.
	}
}

function compress(CompressionStrategy $strategy)
{
	$strategy->fire();
}

compress(
	new JavaScriptStrategy($files, $destination)
);