<?php

namespace App\Http\Controllers;

use App\Domain\Services\PermissionService;
use Illuminate\Http\Request;

class PermissionsController extends BaseController
{
    private PermissionService $permissionService;

    public function __construct(PermissionService $permissionService)
    {
        $this->permissionService = $permissionService;
    }
}
