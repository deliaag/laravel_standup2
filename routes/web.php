<?php


use App\Http\Controllers\ContactController;
use App\Http\Controllers\ComediantController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AgendaController; 
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


Route::get('/', [ContactController::class, 'index']);
Route::resource('contacts', ContactController::class);

Route::get('/', [ComediantController::class, 'index']);  
Route::resource('comedians', ComediantController::class);

Route::get('/', [EventController::class, 'index']);  
Route::resource('events', EventController::class); 

Route::get('/', [AgendaController::class, 'index']);    
Route::resource('agendas', AgendaController::class); 
