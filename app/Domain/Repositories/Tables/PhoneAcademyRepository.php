<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\PhonesAcademy;

class PhoneAcademyRepository extends BaseTableRepository
{
    protected $model = PhonesAcademy::class;
}
