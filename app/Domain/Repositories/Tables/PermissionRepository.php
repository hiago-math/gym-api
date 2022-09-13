<?php

namespace App\Domain\Repositories\Tables;

use App\Models\Permissions;

class PermissionRepository extends BaseTableRepository
{
    protected $model = Permissions::class;
}
