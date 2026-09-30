<?php

namespace App\Http\Services;

use App\Http\Repositories\UserRepository;

class UserService extends BasseService
{
    public function __construct(private UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    
}