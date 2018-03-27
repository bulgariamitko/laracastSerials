<?php

namespace App\Validators;

use Illuminate\Http\Request;

class JeffreyIsStupid
{
	public function search(Request $request)
	{
		if (str_contains($request->title, 'Jeffrey is stupid')) {
			throw new ValidationException;
		}
	}
}