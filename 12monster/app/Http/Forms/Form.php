<?php

namespace App\Http\Forms;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Form
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
			$this->persist();
			return true;
		}
		return false;
		// and call persist(), if passes
	}

	public function fields()
	{
		return $this->request->all();
	}

	abstract public function persist();

	protected function isValid()
	{
		// one way
		// try {
		// 	$this->validate($this->request, $this->rules);
		// } catch (\Exception $e) {
		// 	$this->errors = $e->validator->errors();
		// 	return false;
		// }

		// other way
		$this->validate($this->request, $this->rules);

		return true;
	}

	// will be called on an property that is not defined
	public function __get($property) 
	{
		if ($this->request->has($property)) {
			return $this->request->input($property);
		} else {
			throw new Exception("No Property", 1);
		}
	}
}