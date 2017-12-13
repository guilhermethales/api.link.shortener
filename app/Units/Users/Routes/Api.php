<?php

namespace App\Units\Users\Routes;
use App\Support\Http\Routing\RouteFile;

class Api extends RouteFile 
{
	public function routes() {
		$this->router->apiResource('/users', 'UserController');
	}
}