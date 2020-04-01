<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InstInte extends Model
{
    use SoftDeletes;

    protected $table = 'inst_inte';
    protected $fillable = [
        'id_inst',
        'id_inte'
    ];

    protected $with = ['instrumentos'];

    public function instrumentos()
    {
        return $this->hasMany(Instrumento::class, 'id', 'id_inst');
    }

    public function integrante()
    {
        return $this->belongsTo(Integrante::class, 'id', 'id_inte');
    }
}
