<?php

namespace App\Http\Forms;

Class PublishPostForm extends Form
{
	protected $rules = [
		'body' => 'required',
	];

	public function persist()
	{
		// add any logic - one way
		// $post = Post::create($this->fields());
		// $post->addSubscriber();

		// other way
		// $post = new \App\Post;
		// $post->body = $this->body;

		echo "<pre>";
		print_r('save ' . $this->body . ' to the db');
		print_r($this->fields());
		echo "</pre>";
	}
}