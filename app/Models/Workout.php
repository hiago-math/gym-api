<?php

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

    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'uid_equipment');
    }

    public function muscle()
    {
        return $this->belongsTo(Muscles::class, 'uid_muscle');
    }

    public function workoutType()
    {
        return $this->belongsTo(WorkoutType::class, 'uid_workout_type');
    }

    public function academy()
    {
        return $this->belongsToMany(AcademyTraining::class, 'workout_x_academy', 'uid_workout', 'uid_academy_training');
    }
}
