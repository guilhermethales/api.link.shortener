<?php

namespace App\Domains\Users\Repositories;

use App\Support\Domain\Repository;
use App\Domains\Users\User;

class UserRepository extends Repository
{
	protected $modelClass = User::class;
}