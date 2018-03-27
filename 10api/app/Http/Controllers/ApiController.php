<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Pagination\Paginator;

Class ApiController extends Controller
{
	protected $statusCode = 200;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     *
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function responseNotFound($message = 'Not Found!')
    {
    	return $this->setStatusCode(Response::HTTP_NOT_FOUND)->respondWithError($message);
    }

    public function reponseInternalError($message = 'Internal Error!')
    {
    	return $this->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR)->respondWithError($message);
    }

    protected function respond($data, $headers = [])
    {
    	return response()->json($data, $this->getStatusCode(), $headers);
    }

    protected function respondWithPagination(Paginator $lessons, $data)
    {
        $data = array_merge($data, [
            'total_count' => $lessons->total(),
            'total_pages' => ceil($lessons->total() / $lessons->perPage()),
            'current_page' => $lessons->currentPage(),
            'limit' => $lessons->perPage(),
        ]);

        return $this->respond($data);
    }

    protected function respondWithError($message)
    {
    	return $this->respond([
    			'error' => [
    				'message' => $message,
    				'status_code' => $this->getStatusCode()
    			]
    		]);
    }

    protected function respondWithWrongFields($message)
    {
    	return $this->setStatusCode(422)
				->respondWithError($message);
    }

    protected function respondCreated($message)
    {
    	return $this->respond([
			'status' => 'success',
			'message' => $message
		]);
    }
}