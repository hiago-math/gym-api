<?php

namespace App\Http\Controllers;

use App\Domain\Services\EquipmentService;

class EquipmentController extends BaseController
{
    private EquipmentService $equipmentService;

    public function __construct(EquipmentService $equipmentService)
    {
        $this->equipmentService = $equipmentService;
    }
}
