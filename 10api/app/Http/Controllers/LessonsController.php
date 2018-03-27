<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\ApiController;
use App\Transformars\LessonTransformer;

class LessonsController extends ApiController
{
	// @var Transformers\LessonTransformer
	protected $lessonTransformer;

	public function __construct(LessonTransformer $lessonTransformer)
	{
		$this->lessonTransformer = $lessonTransformer;
		$this->middleware('auth.basic', ['only' => 'store']);
	}

    public function index()
    {
    	// 1. All is bad
    	// 2. No way to attack meta data
    	// 3. Linking db stracture to the API output
    	// 4. No way to signal headers.response codes
    	// return Lesson::all(); //really bad practice

    	// UPDATE 1
        $limit = Request::get('limit') ?: 3; //cool!!!
        if ($limit > 1000) {
            $limit = $lessons->perPage();
        }

        $lessons = Lesson::paginate($limit);
    	return $this->respondWithPagination($lessons,
            ['data' => $this->lessonTransformer->transformCollection($lessons->all())]
        );
    }

    public function show($id)
    {
    	$lesson = Lesson::find($id);

    	if (!$lesson) {
    		return $this->responseNotFound('Lesson does not exist');
    		return $this->responseWithError(404, 'Lesson does not exist');
    	}

    	return $this->respond([
    		'data' => $this->lessonTransformer->transform($lesson),
    	]);
    }

    public function store()
    {
    	if (!Request::input('title') || !Request::input('body')) {
			return $this->respondWithWrongFields('Parameters failed validation for a lesson.');
		}

		Lesson::create(Request::all());

		return $this->respondCreated('Lesson successfully created.');
    }
}