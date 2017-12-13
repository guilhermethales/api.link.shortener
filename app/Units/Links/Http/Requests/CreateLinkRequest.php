<?php

namespace App\Units\Links\Http\Requests;

use App\Support\Http\Request;

class CreateUserRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'url' => 'required|url|min:10|max:255',
						'slug' => 'sometimes|min:10|max:255',
        ];
    }
}