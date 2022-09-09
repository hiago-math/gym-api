<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Domain\Services\PermissionService;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    private PermissionService $permissionService;

    public function __construct(PermissionService $permissionService)
    {
        $this->permissionService = $permissionService;
    }
}
