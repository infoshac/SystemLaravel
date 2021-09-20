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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);
// ROTA PARA EDITAR 
Route::get('/events/edit/{id}',[EventController::class, 'edit']);
Route::put('/events/update/{id}',[EventController::class, 'update'])->middleware('auth');

Route::post('events/join/{id}',[EventController::class, 'joinEvent']);

Route::delete('events/leave/{id}',[EventController::class, 'leaveEvent']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');