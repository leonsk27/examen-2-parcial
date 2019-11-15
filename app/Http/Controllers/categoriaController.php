<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\categoria;
use Illuminate\Support\Facades\DB;

class categoriaController extends Controller
{
    public function index()
    {
        $categorias = categoria::all();
        return response()->json($categorias);
    }
    public function store(Request $request)
    {
        return categoria::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $categoria = categoria::findOrFail($id);
        $categoria->nombre=$request->get('nombre');
        $categoria->descripcion=$request->get('descripcion');
        $categoria->update();
    }
    public function destroy($id)
    {
        $categoria = categoria::findOrFail($id);
        $categoria->delete();
    }

    public function query7() {
        return categoria::select(DB::raw('categorias.nombre, count(detalles.id) as cantidad'))
        ->join('productos', 'categorias.id', '=', 'productos.categoria_id')
        ->join('detalles', 'productos.id', '=', 'detalles.producto_id')
        ->orderByRaw('count(detalles.id) DESC')
        ->limit(2)
        ->groupBy('categorias.id')
        ->get();
    }
}
