<?php

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

    public function functions()
    {
        return $this->belongsToMany(Functions::class, 'permissions_x_function','uid_permission', 'uid_function');
    }
}
