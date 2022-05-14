<?php

declare(strict_types=1);

namespace App\Models;

class Functions extends BaseModel
{
    protected $primaryKey = "uid_function";

    protected $fillable = [
        'label',
        'name',
        'level'
    ];
}
