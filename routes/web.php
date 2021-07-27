<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

use App\Mail\NotificacionMallable;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;


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
Route::resource('usuarios' ,'App\Http\Controllers\UsuariosController');
Route::resource('contratos','App\Http\Controllers\ContratosController');
Route::resource('notificaciones','App\Http\Controllers\NotificacionesController');
// Route::get('pig/vista3','App\Http\Controllers\UsuariosController@store');// no funciona 
// Route::get('pig/vista3','App\Http\Controllers\UsuariosController');
// Route::get('/notificaciones',function()
// {
//     return view('notificaciones');
// })->name('notificaciones');
 

Route::get('/add-post',[PostController::class,'addpost']);
Route::get('/addcomment/{id}',[PostController::class,'addComment']);
Route::get('/getcomment/{id}',[PostController::class,'getcomments']);
Route::get('/addrole',[RoleController::class,'addRole']);
Route::get('/adduser',[RoleController::class,'adduser']);
Route::get('/rolesdeusuarios/{id}',[RoleController::class,'getAllRolesByUser']);
Route::get('/usuariosconroles/{id}',[RoleController::class,'getAllUsersByRole']);
Route::get('/posts',[PostController::class,'index']);



Route::get('/nofvencimiento',function ()
{
    $correo = new NotificacionMallable;
    Mail::to('mauhedezpar@gmail.com')->send($correo);
    return ('mesaje enviado ');
    
});



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




