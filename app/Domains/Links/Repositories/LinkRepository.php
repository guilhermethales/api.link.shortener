<?php

namespace App\Domains\Links\Repositories;

use App\Support\Domain\Repository;
use App\Domains\Links\Link;

class UserRepository extends Repository
{
	protected $modelClass = Link::class;
}