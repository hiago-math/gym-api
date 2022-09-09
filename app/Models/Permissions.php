<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends BaseModel
{
    protected $primaryKey = 'uid_permission';
    protected $table = 'permissions';

    protected $fillable = [
        'label',
        'name',
        'description'
    ];
}
