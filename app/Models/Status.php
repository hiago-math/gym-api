<?php

namespace App\Models;

class Status extends BaseModel
{
    protected $primaryKey = "uid_status";
    protected $table = 'status';

    protected $fillable = [
        'label',
        'name',
        'description'
    ];

    public function typeStatusAcademy()
    {
        return $this->belongsToMany(TypeStatus::class, 'type_status_x_status', 'uid_status', 'uid_type')
            ->where('type', '=', get_class(new AcademyTraining));
    }

    public function typeStatusPeople()
    {
        return $this->belongsToMany(TypeStatus::class, 'type_status_x_status', 'uid_status', 'uid_type')
            ->where('type', '=', get_class(new People()));
    }

    public function typeStatusEquipament()
    {
        return $this->belongsToMany(TypeStatus::class, 'type_status_x_status', 'uid_status', 'uid_type')
            ->where('type', '=', get_class(new Equipment()));
    }

    public function typeStatusUser()
    {
        return $this->belongsToMany(TypeStatus::class, 'type_status_x_status', 'uid_status', 'uid_type')
            ->where('type', '=', get_class(new Users()));
    }
}
