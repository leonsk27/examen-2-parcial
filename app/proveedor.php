<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nombre',
        'rut',
        'web',
        'telefono',
        'ciudad',
        'comuna',
        'calle',
        'numero'
    ];
    public function productos(){
        return $this->hasMany('App\producto', 'proveedor_id');
    }
}
