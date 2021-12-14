<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\FallaController;
use App\Http\Controllers\MaquinaController;

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

Route::get('areas',[AreaController::class,'index'])->name('area.index');
Route::get('areas/create',[AreaController::class,'create'])->name('area.create');
Route::post('areas',[AreaController::class,'store'])->name('area.store');
Route::get('areas/{id_area}/edit',[AreaController::class,'edit'])->name('area.edit');
Route::put('areas/{id_area}',[AreaController::class,'update'])->name('area.update');
Route::delete('areas/{areas}',[AreaController::class,'destroy'])->name('area.destroy');






// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
