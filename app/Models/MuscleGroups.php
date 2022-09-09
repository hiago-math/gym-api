<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuscleGroups extends BaseModel
{
    protected $primaryKey = "uid_muscle_group";
    protected $table = 'muscle_groups';

    protected $fillable = [
        'label',
        'name',
        'img'
    ];

}
