<?php

namespace App\Http\Services;

use App\Http\Repositories\ClassroomRepository;

class ClassroomService extends BaseService
{
    public function __construct(private ClassroomRepository $classroomRepository)
    {
        parent::__construct($classroomRepository);
    }

}