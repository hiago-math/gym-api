<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\TypeStatus;

class TypeStatusRepository extends BaseTableRepository
{
    protected $model = TypeStatus::class;
}
