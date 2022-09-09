<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\PhonesPeople;

class PhonePeopleRepository extends BaseTableRepository
{
    protected $model = PhonesPeople::class;
}
