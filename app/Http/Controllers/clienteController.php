<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\cliente;
Use App\producto;
use Illuminate\Support\Facades\DB;
class clienteController extends Controller
{
    public function query2($nombre) {
        return producto::select('productos.*')
        ->join('detalles', 'productos.id', '=', 'detalles.producto_id')
        ->join('ventas', 'detalles.venta_id','=', 'ventas.id')
        ->join('clientes', 'ventas.cliente_id', '=', 'clientes.id')
        ->where('clientes.nombre', $nombre)
        ->groupBy('productos.id')->get();
    }
    public function query4($ciudad) {
        $clientes = cliente::all()->where('ciudad', $ciudad);
        return $clientes;
    }
    public function query5() {
        $clientes = cliente::select('*')->groupBy('ciudad')->count();
        return $clientes;
    }
    public function query8() {
        return cliente::select(DB::raw('clientes.ciudad, count(clientes.id) as cantidad'))
        ->orderByRaw('count(clientes.id) asc')
        ->limit(1)
        ->groupBy('clientes.ciudad')
        ->get();
    }
    public function query9() {
        return cliente::select(DB::raw('clientes.ciudad, count(detalles.id) as cantidad'))
        ->join('ventas','ventas.cliente_id','=','clientes.id')
        ->join('detalles','detalles.venta_id','=','detalles.id')
        ->orderByRaw('count(detalles.id) desc')
        ->limit(1)
        ->groupBy('clientes.ciudad')
        ->get();
    }
    public function query10() {
        return cliente::select(DB::raw('clientes.nombre, count(ventas.id) as cantidad'))
        ->join('ventas','ventas.cliente_id','=','clientes.id')
        ->orderByRaw('count(ventas.id) desc')
        ->limit(1)
        ->groupBy('clientes.id')
        ->get();
    }
    
}
