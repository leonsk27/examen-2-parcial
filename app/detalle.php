<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'cantidad', 'venta_id', 'producto_id'
    ];
    public function venta() {
        return $this->belongsTo('App\venta');
    }
    public function producto() {
        return $this->belongsTo('App\producto');
    }
}
