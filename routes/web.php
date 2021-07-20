<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () 
{
    return view('welcome');
});
// Route::resource('/','App\Http\Controllers\UserController');
//Route::resource('/','App\Http\Controllers\PersonaController');//PRUEBA
Route::resource('articulos' ,'App\Http\Controllers\ArticuloController');
Route::resource('usuarios'  ,'App\Http\Controllers\UsuariosController');
Route::resource('contratos' ,'App\Http\Controllers\ContratosController');
// Route::get('pig/vista3','App\Http\Controllers\UsuariosController@store');// no funciona 
// Route::get('pig/vista3','App\Http\Controllers\UsuariosController');
Route::get('/notificaciones',function()
{
    return view('notificaciones');
})->name('notificaciones');




// Route::get('/contratos',function ()
// {
//     return view('/pig.vista6');
// });



// Route::get('/pig/contrato/index',function ()
// {
//     return view('contratoindex');
// });
// Route::get('/pig/contratos/index',function ()
// {
//     return view('pig.usuarios.index');
// })->name('index');

// Route::get('pig/usuario/create',function()
// {
//     return view('pig.usuarios.create ');
// })->name('vista2');

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    // return Inertia\Inertia::render('Dash');
    return view('/dash.index') ;
})->name('dash');




