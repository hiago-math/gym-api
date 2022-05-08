<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends BaseModel
{
    use HasFactory, Notifiable;

    protected $primaryKey = "uid_user";

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

}
