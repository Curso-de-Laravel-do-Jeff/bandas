<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instrumento extends Model
{
    use SoftDeletes;

    protected $table = 'instrumentos';
    protected $fillable = [
        'name'
    ];
}
