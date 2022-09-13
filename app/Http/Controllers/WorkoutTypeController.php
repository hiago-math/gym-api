<?php

namespace App\Http\Controllers;

use App\Domain\Services\WorkoutTypeService;

class WorkoutTypeController extends BaseController
{
    private WorkoutTypeService $workoutTypeService;

    public function __construct(WorkoutTypeService $workoutTypeService)
    {
        $this->workoutTypeService = $workoutTypeService;
    }
}
