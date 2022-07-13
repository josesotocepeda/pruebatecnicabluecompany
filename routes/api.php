<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
  |-------------------------------------------------------------------------------
  | Listado completo de productos
  |-------------------------------------------------------------------------------
  | URL:            /api/productos
  | Controller:     ApiController@getAllProductos
  | Method:         GET
  | Description:    Obtener listado de todos los productos del sistema
  */
  Route::get('/productos', [App\Http\Controllers\ApiController::class, 'getAllProductos']);

  /*
  |-------------------------------------------------------------------------------
  | Consulta de producto
  |-------------------------------------------------------------------------------
  | URL:            /api/productos/{id}
  | Controller:     ApiController@getProducto
  | Method:         GET
  | Description:    Obtener la información de un producto
  */
  Route::get('/productos/{id}', [App\Http\Controllers\ApiController::class, 'getProducto']);

  /*
  |-------------------------------------------------------------------------------
  | Listado de productos por categorías
  |-------------------------------------------------------------------------------
  | URL:            /api/categoriasproducto
  | Controller:     ApiController@getAllCategoriasProductos
  | Method:         GET
  | Description:    Listado de todos los productos asociados por categoría
  */
  Route::get('/categoriasproducto', [App\Http\Controllers\ApiController::class, 'getAllCategoriasProductos']);