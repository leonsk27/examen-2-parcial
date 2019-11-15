<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'nombre', 'descripcion'
    ];
    public function productos(){
        return $this->hasMany('App\producto', 'categoria_id');
    }
}
