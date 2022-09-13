<?php

namespace App\Domain\Repositories\Tables;

use App\Models\Status;

class StatusRepository extends BaseTableRepository
{
    protected $model = Status::class;
}
