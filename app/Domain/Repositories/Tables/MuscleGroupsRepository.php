<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\MuscleGroups;

class MuscleGroupsRepository  extends BaseTableRepository
{
    protected $model = MuscleGroups::class;
}
