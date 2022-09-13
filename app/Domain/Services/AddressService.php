<?php

namespace App\Domain\Services;

use App\Domain\Component\Helper\PayloadHelper;
use App\Domain\Repositories\Tables\AddressRepository;

class AddressService
{
    private AddressRepository $addressRepository;

    public function __construct(AddressRepository $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }

    public function create(array $data)
    {
        $data = PayloadHelper::normalizePayload($data, $this->addressRepository->getFillable());

        return $this->addressRepository->firstOrCreate($data);

    }
}
