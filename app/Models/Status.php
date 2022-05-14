<?php

declare(strict_types=1);

namespace App\Models;

class Status extends BaseModel
{
    protected $primaryKey = "uid_status";

    protected $fillable = [
      'type',
      'description'
    ];

    public function people()
    {
        return $this->belongsTo(People::class, 'uid_status');
    }
}
