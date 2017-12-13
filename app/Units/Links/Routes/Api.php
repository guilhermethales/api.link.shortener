<?php

namespace App\Units\Links\Routes;
use App\Support\Http\Routing\RouteFile;

class Api extends RouteFile 
{
	public function routes() {
		$this->router->apiResource('/links', 'LinkController');
	}
}