<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\WorkoutType;

class WorkoutTypeRepository extends BaseTableRepository
{
    protected $model = WorkoutType::class;
}
