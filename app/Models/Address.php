<?php

namespace App\Models;

class Address extends BaseModel
{
    protected $primaryKey = "uid_address";

    protected $fillable = [
        "zip_code",
        "street",
        "city",
        "district",
        "number",
        "uf"
    ];
}
