<?php

namespace App\Validators;

use Illuminate\Http\Request;
use App\Utilities\Curl;
use Illuminate\Config\Repository As Config;

class CaptchaWasClicked
{
	protected $curl;
	protected $config;

	public function __construct(Curl $curl, Config $config)
	{
		$this->curl = $curl;
		$this->config = $config;
	}

	public function search(Request $request)
	{
		$response = json_decode(
			$this->curl->post('https://www.google.com/recaptcha/api/siteverify', [
				'secret' => $this->config->get('service.recaptcha.secret'),
				'response' => $request->input('g-recap-cha-response'),
				'remoteip' => $request->ip(),
			])
		);

		if (!$response->success) {
			throw new ValidationException;
		}
	}
}