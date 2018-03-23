<?php

namespace App\Http\Forms;

Class PublishPostForm extends Form
{
	protected $rules = [
		'body' => 'required',
	];

	public function persist()
	{
		echo "<pre>";
		print_r('save crap to the db');
		echo "</pre>";
	}
}