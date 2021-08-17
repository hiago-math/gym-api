<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $connection = 'mysql';

    protected $table = 'address';

    protected $fillable = [
        "zip_code",
        "street",
        "city",
        "district",
        "number",
        "uf",
        "complement"
    ];
}
