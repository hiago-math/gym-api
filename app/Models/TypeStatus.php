<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TypeStatus extends BaseModel
{
    protected $primaryKey = "uid_type";
    protected $table = 'type_status';

    protected $fillable = [
        'type'
    ];

    public function status()
    {
        return $this->belongsToMany(Status::class, 'type_status_x_status', 'uid_type', 'uid_status');
    }
}
