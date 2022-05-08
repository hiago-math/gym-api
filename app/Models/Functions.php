<?php

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
