<?php

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

    public function workout()
    {
        return $this->hasMany(Workout::class, 'uid_workout_type');
    }
}
