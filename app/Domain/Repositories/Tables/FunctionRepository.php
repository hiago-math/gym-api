<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\Functions;

class FunctionRepository extends BaseRepository
{
    protected $model = Functions::class;
}
