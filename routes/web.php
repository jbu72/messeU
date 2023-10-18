<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('Admin/en_entente');
});
Route::get('/', [UserController::class, 'HomeUser'])->name('home');
Route::get('formdemande/{type}', [UserController::class, 'formdemande'])->name('formdemande');
Route::post('demande', [UserController::class, 'traitementdemande'])->name('traitementdemande');
