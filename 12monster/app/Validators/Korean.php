<?php

namespace App\Validators;

use Illuminate\Http\Request;

class Korean
{
	public function search(Request $request)
	{
		if (preg_match("/[\p{Hangul}]*/u", $request->title)) {
			throw new ValidationException;
		}

		if (preg_match("/[\p{Hangul}]*/u", $request->title)) {
			throw new ValidationException;
		}

		if (preg_match("/[\p{Hangul}]*/u", $request->title)) {
			throw new ValidationException;
		}
	}
}