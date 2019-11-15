<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nombre',
        'rut',
        'telefono',
        'ciudad',
        'comuna',
        'calle',
        'numero'
    ];
    public function productos(){
        return $this->hasMany('App\venta', 'venta_id');
    }
}
