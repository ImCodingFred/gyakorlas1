<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelepulesController;

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

Route::view('/','welcome');
Route::get('/hirek',[TelepulesController::class,'Hirek']);
Route::get('/vendegkonyv',[TelepulesController::class,'Vendeg']);
Route::view('/regisztracio','reg');
Route::post('/regisztracio',[TelepulesController::class, 'Reg']);
Route::get('/belepes',[TelepulesController::class, 'belepes']);
Route::post('/belepes',[TelepulesController::class, 'belepespost']);
Route::get('/kilepes',[TelepulesController::class, 'Logout']);
