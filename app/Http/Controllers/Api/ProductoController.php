<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller {
    
    public function index() {
        // Devolvemos todos los productos para el catálogo de GitHub Pages
        return response()->json(Producto::all());
    }

    public function show($id) {
        // Devolvemos el producto con nutrientes y alérgenos
        $producto = Producto::with(['nutrientes', 'alergenos'])->find($id);
        
        if (!$producto) return response()->json(['error' => 'No encontrado'], 404);
        
        return response()->json($producto);
    }
}