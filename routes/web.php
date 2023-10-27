<?php

use App\Http\Controllers\MedicineController;
use App\Http\Controllers\UserController;
use App\Models\Medicine;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::prefix('/medicine')->name('medicine.')->group(function() {
    Route::get('/create', [MedicineController::class, 'create'])->name('create');
    Route::post('/store', [MedicineController::class, 'store'])->name('store');
    Route::get('/', [MedicineController::class, 'index'])->name('home');
    Route::get('/{id}', [MedicineController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [MedicineController::class, 'update'])->name('update');
    Route::delete('/{id}', [MedicineController::class, 'destroy'])->name('delete');
    Route::get('/data/stock', [MedicineController::class, 'stock'])->name('stock');
    Route::get('/data/stock/{id}', [MedicineController::class, 'stockEdit'])->name('stock.edit');
    Route::patch('/data/stock/{id}', [MedicineController::class, 'stockUpdate'])->name('stock.update');

    });

    route::prefix('/user')->name('user.')->group(function(){
    route::get('/', [UserController::class, 'index'])->name('home');
    route::get('/create', [UserController::class, 'create'])->name('create');
    route::get('/validate', [UserController::class, 'validate'])->name('validate');
    route::post('/store', [UserController::class, 'store'])->name('store');
    route::get('/{id}', [UserController::class, 'edit'])->name('edit');
    route::patch('/{id}', [UserController::class, 'update'])->name('update');
    route::delete('/{id}', [UserController::class, 'destroy'])->name('delete');

    });
