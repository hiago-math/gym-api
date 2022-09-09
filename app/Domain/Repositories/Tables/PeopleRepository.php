<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\People;

class PeopleRepository  extends BaseTableRepository
{
    protected $model = People::class;
}
