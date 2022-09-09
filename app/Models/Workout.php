<?php

declare(strict_types=1);

namespace App\Models;

class Workout extends BaseModel
{
    protected $primaryKey = 'uid_workout';
    protected $table = 'workout';

    protected $fillable = [
        'name',
        'description',
        'gift_example'
    ];
}
