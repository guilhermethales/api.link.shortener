<?php

namespace App\Units\Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
						'email' => 'required|email|max:255',
						'password' => 'required|min:6|max:255',
        ];
    }
}
