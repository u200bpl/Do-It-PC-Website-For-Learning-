<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GamingpcController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;

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

Route::get('/', [PagesController::class, 'index']);
// Route::resource('gaming-pc', GamingpcController::class);
Route::get('/gaming-pc', [GamingpcController::class, 'index']);

Route::middleware(['web', 'auth'])->group(function () {
    Route::resource('/account', AccountController::class);
});

Route::middleware(['web', 'isAdmin'])->group(function () {
    Route::resource('admin', AdminController::class);
    Route::get('/gaming-pc/create', [GamingpcController::class, 'create']);
    Route::post('/gaming-pc', [GamingpcController::class, 'store'])->name('gamingpc.store');
    Route::delete('/gaming-pc/{id}', [GamingpcController::class, 'destroy'])->name('gamingpc.destroy'); 
});

require __DIR__.'/auth.php';
