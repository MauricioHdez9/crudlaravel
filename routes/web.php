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
Route::resource('articulos','App\Http\Controllers\ArticuloController');
Route::get('/pig/vista3',function ()
{
    return view('/pig.vista3');
})->name('vista3');
// Route::get('pig/vista3','App\Http\Controllers\UsuariosController@store');// no funciona 
Route::resource('pig/vista2','App\Http\Controllers\UsuariosController');
// Route::get('pig/vista3','App\Http\Controllers\UsuariosController');
Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    // return Inertia\Inertia::render('Dash');
    return view('/dash.index') ;
})->name('dash');

Route::get('/pig/vista7',function ()
{
    return view('/pig.vista7');
});

Route::get('/pig/vista6',function ()
{
    return view('/pig.vista6');
});

Route::get('/pig/vista5',function ()
{
    return view('/pig.vista5');
});

Route::get('/pig/vista4',function ()
{
    return view('/pig.vista4');
});

Route::get('/pig/vista2',function()
{
    return view('/pig.vista2');
})->name('vista2');




