<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialControllerAPI;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//get consultar
//
Route::get('/editoriales', [EditorialControllerAPI::class, 'index']);   

Route::get('/editoriales/{id}', [EditorialControllerAPI::class, 'show']);   


Route::post('/editoriales', [EditorialControllerAPI::class, 'store']);   

Route::put('/editoriales/{id}', [EditorialControllerAPI::class, 'update']);   

Route::delete('/editoriales/{id}', [EditorialControllerAPI::class, 'destroy']);   
