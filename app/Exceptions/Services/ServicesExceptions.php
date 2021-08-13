<?php

declare(strict_types=1);

namespace App\Exceptions\Services;


use App\Domain\Services\BaseServices;
use App\Exceptions\Config\BaseException;
use App\Exceptions\Config\BuildExceptions;
use App\Exceptions\DefaultException;
use Symfony\Component\HttpFoundation\Response;

class ServicesExceptions
{
    public static function handle()
    {
        $exception = new BaseException(
            'ServiceInvalidException',
            'Service não parametrizado.',
            'Service não parametrizado.',
            "Parametrize na base" . BaseServices::class,
            Response::HTTP_UNPROCESSABLE_ENTITY,

        );

        throw new BuildExceptions($exception);
    }
}
