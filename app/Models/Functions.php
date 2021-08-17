<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Functions extends Model
{
    protected $connection = 'mysql';

    protected $table = 'functions';

    protected $fillable = [
        'label',
        'name',
        'level'
    ];
}
