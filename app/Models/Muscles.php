<?php

namespace App\Models;

class Muscles extends BaseModel
{
    protected $primaryKey = 'uid_muscle';
    protected $table = 'muscles';

    protected $fillable = [
        'name',
        'img'
    ];

    public function muscleGroup()
    {
        return $this->belongsTo(MuscleGroups::class, 'uid_muscle_group');
    }

    public function workout()
    {
        return $this->belongsTo(Workout::class, 'uid_muscle');
    }
}
