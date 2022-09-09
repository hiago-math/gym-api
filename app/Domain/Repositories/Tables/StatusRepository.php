<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\Status;

class StatusRepository extends BaseTableRepository
{
    protected $model = Status::class;
}
