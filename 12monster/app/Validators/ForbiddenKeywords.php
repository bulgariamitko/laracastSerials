<?php

namespace App\Validators;

use Illuminate\Http\Request;

class ForbiddenKeywords
{
	protected $keywords = [
		'megavideo',
		'HD Streaming Online',
	];

	public function search(Request $request)
	{
		foreach ($this->keywords as $spam) {
			if (stripos($request->body, $spam) !== false) {
				throw new ValidationException;
			}
		}
	}
}