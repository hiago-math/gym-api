<?php

namespace App\Http\Controllers;

use App\Domain\Services\WorkoutService;

class WorkoutController extends BaseController
{
    private WorkoutService $workoutService;

    public function __construct(WorkoutService $workoutService)
    {
        $this->workoutService = $workoutService;
    }
}
