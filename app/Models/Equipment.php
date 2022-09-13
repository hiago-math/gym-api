<?php
namespace App\Models;

class Equipment extends BaseModel
{
    protected $primaryKey = 'uid_equipmant';
    protected $table = 'equipments';

    protected $fillable = [
        'name',
        'img'
    ];

    public function status()
    {
        return $this->hasOne(Status::class, 'uid_status');
    }

    public function workout()
    {
        return $this->hasOne(Workout::class, 'uid_equipment');
    }
}
