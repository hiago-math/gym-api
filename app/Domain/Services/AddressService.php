<?php

declare(strict_types=1);

namespace App\Domain\Services;

use App\Domain\Component\Helper\StringHelper;
use App\Domain\Repositories\Tables\AddressRepository;
use Illuminate\Database\Eloquent\Model;

class AddressService extends BaseServices
{
    /**
     * @var AddressRepository $addressRepository
     */
    private $addressRepository;

    public function __construct(AddressRepository $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }

    public function create(array $data = []): ?Model
    {
        $filds = [];
        foreach ($data as $key => $value) {
            $filds[$key] = StringHelper::removeSpecialcharactersAndAccent($value);
        }

        return $this->addressRepository->create($filds);
    }
}
