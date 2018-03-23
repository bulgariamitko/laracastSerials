<?php

namespace App\Http\Forms;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

Class Form
{
	use ValidatesRequests;

	protected $request;
	protected $rules = [];
	// i can make also
	// abstract protected function rules();

	public function __construct(Request $request = null)
	{
		$this->request = $request ?: request();
	}

	public function save()
	{
		// do validation
		if ($this->isValid()) {
			return $this->persist();
		}
		return false;
		// and call persist(), if passes
	}

	abstract public function persist();

	protected function isValid()
	{
		$this->validate($this->request, $this->rules);

		return true;
	}
}