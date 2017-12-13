<?php

namespace App\Support\Http;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
	public function authorize()
	{
		return true;
	}
}