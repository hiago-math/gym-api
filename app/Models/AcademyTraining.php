<?php

namespace App\Models;

class AcademyTraining extends BaseModel
{
    protected $primaryKey = 'uid_academy_training';
    protected $table = 'academy_training';

    protected $fillable = [
        'name',
        'fantasy_name',
        'cnpj',
        'uid_address',
        'uid_status'
    ];

    public function phonesAcademy()
    {
        return $this->hasMany(PhonesAcademy::class, 'uid_academy_training');
    }

    public function status()
    {
        return $this->hasOne(Status::class, 'uid_status', 'uid_status');

    }

    public function address()
    {
        return $this->hasOne(Address::class,'uid_address');
    }

    public function workout()
    {
        return $this->belongsToMany(Workout::class, 'workout_x_academy',  'uid_academy_training', 'uid_workout');
    }

    public function users()
    {
        return $this->belongsToMany(Users::class, 'user_x_academy_training','uid_academy_training','uid_user');
    }
}
