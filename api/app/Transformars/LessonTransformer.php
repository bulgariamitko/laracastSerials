<?php

namespace App\Transformars;

use App\Transformars\Transformer;

Class LessonTransformer extends Transformer
{
    public function transform($lesson) {
		return [
			'title' => $lesson['title'],
			'body' => $lesson['body'],
			'active' => (boolean)$lesson['same_bool'],
		];
    }
}