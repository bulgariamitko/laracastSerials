<?php

namespace App\Transformars;

use App\Transformars\Transformer;

Class TagTransformer extends Transformer
{
    public function transform($tag) {
		return [
			'name' => $tag['name'],
		];
    }
}