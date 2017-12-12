<?php

namespace App\Domains\Links;

use App\Domains\UserModel;

class Link extends UserModel
{
    protected $fillable = [
			'url', 'slug'
		];
}
