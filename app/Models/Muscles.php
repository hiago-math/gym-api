<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muscles extends BaseModel
{
    protected $primaryKey = 'uid_muscle';
    protected $table = 'muscles';

    protected $fillable = [
        'name',
        'img'
    ];
}
