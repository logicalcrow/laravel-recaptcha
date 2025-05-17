<?php

namespace Logicalcrow\ReCaptcha\Controllers;

use Illuminate\Routing\Controller;

/**
 * Class ReCaptchaController
 * @package Logicalcrow\ReCaptcha\Controllers
 */
class ReCaptchaController extends Controller
{

	/**
	 * @return array
	 */
	public function validateV3(): array
	{

		$token = request()->input(config('recaptcha.default_token_parameter_name', 'token'), '');

		return recaptcha()->validate($token);
	}
}