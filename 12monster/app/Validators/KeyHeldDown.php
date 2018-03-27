<?php

namespace App\Validators;

use Illuminate\Http\Request;

class KeyHeldDown
{
	public function search(Request $request)
	{
		if (preg_match("/(.)\\1{3,}/u", $title)) {
			throw new ValidationException;
		}
	}
}