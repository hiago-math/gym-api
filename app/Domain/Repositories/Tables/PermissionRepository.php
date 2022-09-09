<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\Permissions;

class PermissionRepository extends BaseTableRepository
{
    protected $model = Permissions::class;
}
