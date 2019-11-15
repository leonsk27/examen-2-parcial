<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'fecha',
        'montoFinal',
        'descuento',
        'cliente_id'
    ];
    public function detalles() {
        return $this->hasMany('App\detalle', 'venta_id');
    }
    public function cliente() {
        return $this->belongsTo('App\cliente');
    }
    
}
