<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Domain\Services\WorkoutService;

class WorkoutController extends Controller
{
    private WorkoutService $workoutService;

    public function __construct(WorkoutService $workoutService)
    {
        $this->workoutService = $workoutService;
    }
}
