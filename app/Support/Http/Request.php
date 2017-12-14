<?php

namespace App\Support\Http;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;

abstract class Request extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	/**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
				$errors = $validator->errors()->toArray();
        throw (new ValidationException($validator, 
					response()->json($errors, 422);
				))
                    ->errorBag($this->errorBag)
                    ->redirectTo($this->getRedirectUrl());
    }
}