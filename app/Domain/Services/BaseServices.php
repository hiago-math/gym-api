<?php

namespace App\Domain\Services;

use App\Exceptions\Services\ServicesExceptions;

class BaseServices
{
    const SERVICES = [
    ];

    public function __get($service)
    {
        if (!array_key_exists($service, self::SERVICES)) {
            ServicesExceptions::handle();
        }

        $classname = self::SERVICES[$service];

        return app()->make($classname);
    }
}
