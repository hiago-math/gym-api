<?php

namespace App\Domain\Repositories\Tables;

use App\Models\Muscles;

class MuscleRepository  extends BaseTableRepository
{
    protected $model = Muscles::class;
}
