<?php

declare(strict_types=1);

namespace App\Models;

class PhonesAcademy extends BaseModel
{
    protected $primaryKey = 'uid_phone';
    protected $table = 'phones_academy';

    protected $fillable = [
        'phone_number'
    ];

    public function people()
    {
        return $this->belongsTo(AcademyTraining::class, 'uid_academy_training');
    }
}
