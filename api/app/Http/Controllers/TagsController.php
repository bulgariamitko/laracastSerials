<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Lesson;
use Illuminate\Http\Request;
use App\Transformars\TagTransformer;
use App\Http\Controllers\ApiController;

class TagsController extends ApiController
{
	protected $tagTransformer;

	public function __construct(TagTransformer $tagTransformer)
	{
		$this->tagTransformer = $tagTransformer;
	}

    public function index($lessonId = null)
    {
    	$tags = $this->getTags($lessonId);

    	return $this->respond([
    		'data' => $this->tagTransformer->transformCollection($tags->all())
    	]);
    }

    public function show($tag)
    {
    	
    }

    private function getTags($lessonId)
    {
    	return $lessonId ? Lesson::findOrFail($lessonId)->tags : Tag::all();
    }
}
