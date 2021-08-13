<?php

namespace App\Domain\Services;

class BaseServices
{
    const SERVICES = [
        'addressService' => AddressService::class
    ];

    public function __get($service)
    {
        if (! array_key_exists($service, self::SERVICES)) {
            throw new Servi();
        }

        $classname = self::SERVICES[$service];

        return app()->make($classname);
    }
}
