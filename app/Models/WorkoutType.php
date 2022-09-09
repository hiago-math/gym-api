<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutType extends BaseModel
{
    protected $primaryKey = 'uid_workout_type';
    protected $table = 'workout_type';

    protected $fillable = [
        'type'
    ];
}
