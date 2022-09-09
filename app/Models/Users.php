<?php

declare(strict_types=1);

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

}
