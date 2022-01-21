<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hazifeladatok extends Model
{
    use HasFactory;
    protected $fillable = ['url', 'szoveges', 'pontszam'];

    protected $visible = [
        'id',
        'url',
        'szoveges',
        'pontszam',
    ];
}
