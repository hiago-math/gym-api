<?php

namespace App\Domain\Component\Helper;

class PayloadHelper
{
    public static function normalizePayload(array $request, array $fillable): array
    {
        $payload = [];
        foreach ($fillable as $key) {
            if (array_key_exists($key, $request)) {
                $payload[$key] = $request[$key];
            }
        }

        return $payload;
    }
}
