<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function getAllProductos() {
        $productos = Producto::get()->toJson(JSON_PRETTY_PRINT);
        return response($productos, 200);
    }

    public function getProducto($id) {
        if (Producto::where('id', $id)->exists()) {
            $producto = Producto::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($producto, 200);
          } else {
            return response()->json([
              "message" => "producto no fue encontrado"
            ], 404);
          }
    }

    public function getAllCategoriasProductos() {
        $sql = "SELECT productos.nombre as producto, categorias.nombre as categoria
                FROM categorias, productos, categoria_producto
                WHERE categoria_producto.producto_id=productos.id 
                AND categoria_producto.categoria_id=categorias.id
                ORDER BY productos.nombre, categorias.nombre";
        $all = DB::select($sql);
        $all = json_encode($all); 
        
        return response($all, 200);

        /* 
        $all = DB::table('productos')
            ->join('categoria_producto', 'categoria_producto.producto_id', '=', 'productos.id')
            ->join('categorias', 'categorias.id', '=', 'categoria_producto.categoria_id')
            ->select('categorias.nombre', 'productos.nombre', 'categoria_producto.categoria_id')
            ->get()
            ->toJson(JSON_PRETTY_PRINT);

        $matchThese = [
            '' => '', 
            '' => ''
        ];
        $all = Producto::where($matchThese)->get()->toJson(JSON_PRETTY_PRINT);
        */
    }
}
