<?php

namespace App\Http\Repositories;

use App\Models\Classroom;

class ClassroomRepository
{
    public function __construct(private Classroom $model)
    {
        parent::__construct($model);
    }
    
}