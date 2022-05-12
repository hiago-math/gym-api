<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Peoples extends BaseModel
{
    use HasFactory, Notifiable;

    protected $primaryKey = "uid_people";

    protected $fillable = [
        'full_name',
        'email',
    ];
}
