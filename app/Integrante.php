<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Integrante extends Model
{
    use SoftDeletes;

    protected $table = 'integrantes';
    protected $fillable = [
        'name',
        'id_banda'
    ];

    public function banda()
    {
        return $this->hasOne(Banda::class, 'id', 'id_banda');
    }

    public function instInte()
    {
        return $this->hasMany(InstInte::class, 'id_inte', 'id');
    }
}
