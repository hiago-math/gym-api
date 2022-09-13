<?php

namespace App\Http\Controllers;

use App\Domain\Services\EquipmentService;

class EquipmentController extends Controller
{
    private EquipmentService $equipmentService;

    public function __construct(EquipmentService $equipmentService)
    {
        $this->equipmentService = $equipmentService;
    }
}
