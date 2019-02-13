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

Route::get('category/{category}', 'CategoriesController@getCategory');

Route::get('category/{category}/{subCategory}', 'CategoriesController@getSubCategory');

Route::get('product/{product}', 'ProductsController@getProduct');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'admin:1'], function () {
        Route::get('user/admin', 'UsersController@showAdminPanel');
        Route::get('user/admin/listarproductos', 'ProductsController@listarProductos');
        Route::get('user/admin/nuevoproducto', 'ProductsController@menuNuevoProducto');
        Route::post('user/admin/nuevoproducto', 'ProductsController@formNuevoProducto');
        Route::get('user/admin/editarproducto/{id}', 'ProductsController@menuEditarProducto');
        Route::put('user/admin/editarproducto/{id}', 'ProductsController@formEditarProducto');
        Route::get('user/admin/actualizarproducto/{id}', 'ProductsController@actualizarProducto');
        Route::get('user/admin/stock', 'ProductsController@menuStock');
        Route::post('user/admin/stock', 'ProductsController@comprobarStock');
        Route::get('user/admin/usuarios', 'UsersController@usuarios');
        Route::get('user/admin/usuarios/borrar/{id}', 'UsersController@borrarUsuario');
        Route::get('user/admin/proveedores','ProvidersController@getProvider');
        Route::get('user/admin/productosProveedor/{id}','ProvidersController@getProductsProvider');
        Route::get('user/admin/pedidosusuarios', 'UsersController@listarPedidosUsuarios');
        Route::get('user/admin/detallespedido/{id}', 'UsersController@mostrarPedidoUsuario');
    });
    Route::get('user/showOrders{id}', 'UsersController@showOrders');
});

Auth::routes();
