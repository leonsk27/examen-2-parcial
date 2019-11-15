<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\producto;
Use App\detalle;
use Illuminate\Support\Facades\DB;

class productoController extends Controller
{
    public function query1($id) {
        $productos = producto::where('proveedor_id', $id)->get();
        return $productos;
    }
    public function query3() {
        $productos = producto::where('proveedor_id', 1)->get();
        return $productos;
    }
    public function query6() {

        return DB::table('productos')
        ->join('detalles', 'productos.id', '=', 'detalles.producto_id')
        ->select(DB::raw('productos.nombre, count(detalles.id) as cantidad'))   
        ->orderByRaw('count(detalles.id) DESC')
        ->limit(2)
        ->groupBy('productos.id')
        ->get();
    }
    public function query11() {
        // return DB::table('productos')
        // ->select(DB::raw('productos.nombre, stock'))   
        // ->groupBy('productos.id')
        // ->havingRaw('productos.stock > 0')
        // ->get();

        return producto::select('productos.nombre','stock')   
        ->groupBy('productos.id')
        ->havingRaw('productos.stock > 0')
        ->get();
    }
}
