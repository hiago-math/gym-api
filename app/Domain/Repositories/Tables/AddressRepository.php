<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\Address;

class AddressRepository extends BaseRepository
{
    protected $model = Address::class;

}
