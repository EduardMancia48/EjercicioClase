<?php

use App\Http\Controllers\AutorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/hello', function(){
return "Hola mundo";
});*/

Route::get('/hello/{nombre}', function($nombre){
    return "Hola $nombre";
    });
    

    //forma 2
    Route::view('/hello','hello');

   /* Route::get('/editoriales', 
    [EditorialController::class,'index']);
    
    Route::get('editoriales/create', 
    [EditorialController::class,'create']);
    
    Route::get('editoriales/details/{i}', 
    [EditorialController::class,'details']);*/
    
Route::controller(EditorialController::class)->group(function(){
    Route::get('/editoriales', 'index');
    Route::get('editoriales/create', 'create');
    Route::get('editoriales/details/{i}',  'details');
    Route::resource('autores', AutorController::class);
});

