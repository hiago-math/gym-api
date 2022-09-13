<?php

namespace App\Domain\Repositories\Tables;

use App\Models\Equipment;

class EquipmentRespository extends BaseTableRepository
{
    protected $model = Equipment::class;
}
