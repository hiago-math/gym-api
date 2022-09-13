<?php

namespace App\Domain\Repositories\Tables;

use App\Models\Workout;

class WorkoutRepository extends BaseTableRepository
{
    protected $model = Workout::class;
}
