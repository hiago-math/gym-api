<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\Users;

class UsersRepository extends BaseTableRepository
{
    protected $model = Users::class;
}
