<?php

namespace App\Validators;

use Illuminate\Http\Request;

class Spam
{
	protected $checks = [
		ForbiddenKeywords::class,
		KeyHeldDown::class,
		Korean::class,
		CaptchaWasClicked::class,
		JeffreyIsStupid::class,
	];

	public function search(Request $request)
	{
		foreach ($this->checks as $class) {
			app($class)->search($request);
		}
	}
}