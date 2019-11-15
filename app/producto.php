<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'nombre', 'precio', 'stock', 'categoria_id', 'proveedor_id'
    ];
    public function categoria() {
        return $this->belongsTo('App\categoria');
    }
    public function proveedor() {
        return $this->belongsTo('App\proveedor');
    }
    public function detalles(){
        return $this->hasMany('App\detalle', 'producto_id');
    }
}
