<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|--------------------------------------------------------------------------
 */

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('category/{category}', 'CategoriesController@mostrarCategoria');

Route::get('category/{category}/{subCategory}', 'CategoriesController@mostrarSubcategoria');

Route::get('product/{product}', 'ProductsController@detallesProducto');

Route::post('search', 'HomeController@busqueda');

Route::get('carrito', 'AddToCartController@getCarrito');
Route::get('carrito/borrar/{id}', 'AddToCartController@delCarrito');
Route::get('carrito/numero', 'AddToCartController@numeroCarrito');
Route::get('carrito/{id}/menos', 'AddToCartController@unoMenosCarrito');
Route::get('carrito/{id}', 'AddToCartController@addCarrito');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'admin:1'], function () {
        Route::get('user/admin', 'UsersController@mostrarPanelAdmin');
        Route::get('user/admin/listarproductos', 'ProductsController@listarProductos');
        Route::get('user/admin/nuevoproducto', 'ProductsController@menuNuevoProducto');
        Route::post('user/admin/nuevoproducto', 'ProductsController@formNuevoProducto');
        Route::get('user/admin/editarproducto/{id}', 'ProductsController@menuEditarProducto');
        Route::put('user/admin/editarproducto/{id}', 'ProductsController@formEditarProducto');
        Route::get('user/admin/actualizarproducto/{id}', 'ProductsController@actualizarProducto');
        Route::get('user/admin/stock', 'ProductsController@menuStock');
        Route::post('user/admin/stock', 'ProductsController@comprobarStock');
        Route::get('user/admin/usuarios', 'UsersController@listarUsuarios');
        Route::get('user/admin/usuarios/borrar/{id}', 'UsersController@borrarUsuarios');
        Route::get('user/admin/proveedores','ProvidersController@listarProveedores');
        Route::get('user/admin/productosproveedor/{id}','ProvidersController@listarProductosProveedor');
        Route::get('user/admin/pedidosusuarios', 'OrdersController@listarPedidosUsuarios');
        Route::get('user/admin/detallespedido/{id}', 'OrdersController@detallesPedidoUsuario');
    });
    Route::get('user/pedidos{id}', 'UsersController@listarPedidos');
    Route::post('pagar', 'FinishOrderController@pagar');
});

Auth::routes();
