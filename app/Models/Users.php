<?php

namespace App\Models;

class Users extends BaseModel
{
    protected $primaryKey = "uid_user";
    protected $table = 'users';

    protected $fillable = [
        'name',
        'username',
        'password',
        'las_login'
    ];

    public function person()
    {
        return $this->belongsTo(People::class, 'uid_people');
    }

    public function function()
    {
        return $this->hasOne(Functions::class, 'uid_function');
    }

    public function gyms()
    {
        return $this->belongsToMany(AcademyTraining::class, 'user_x_academy_training','uid_user', 'uid_academy_training');
    }

    public function status()
    {
        return $this->hasOne(Status::class, 'uid_status');
    }

}
