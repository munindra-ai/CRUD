<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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
    return view('welcome');
});
Route::get('show',[CrudController::class,'show'])->name('show');
Route::get('create',[CrudController::class,'create']);
Route::get('store',[CrudController::class,'store'])->name('store');
// Route::post('submit',[CrudController::class,'store']);
Route::get('update/{id}',[CrudController::class,'update'])->name('update');
Route::get('edit/{id}',[CrudController::class,'edit']);
Route::get('delete/{id}',[CrudController::class,'destroy']);
// Route::post('CRUD_update/{id}',[CrudController::class,'destroy']);
// Route::post('CRUD_update/{id}',[CrudController::class,'destroy']);
