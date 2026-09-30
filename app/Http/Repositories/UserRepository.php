<?php

namespace App\Http\Repositories;

use App\Models\User;

class UserRepository
{
    public function __construct(private User $model)
    {
        parent::__construct($model);
    }

}