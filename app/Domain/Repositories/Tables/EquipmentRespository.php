<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\Equipment;

class EquipmentRespository extends BaseTableRepository
{
    protected $model = Equipment::class;
}
