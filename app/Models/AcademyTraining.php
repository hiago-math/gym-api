<?php

declare(strict_types=1);

namespace App\Models;

class AcademyTraining extends BaseModel
{
    protected $primaryKey = 'uid_academy_training';
    protected $table = 'academy_training';

    protected $fillable = [
        'name',
        'fantasy_name',
        'cnpj'
    ];

    public function phone()
    {
        return $this->hasMany(PhonesAcademy::class, 'uid_academy_training');
    }

}
