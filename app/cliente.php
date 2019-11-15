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
    public function ventas(){
        return $this->hasMany('App\venta', 'cliente_id');
    }
}
