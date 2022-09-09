<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\AcademyTraining;

class AcademyTrainingRepository extends BaseTableRepository
{
    protected $model = AcademyTraining::class;
}
