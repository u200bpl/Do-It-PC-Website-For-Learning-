<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GamingpcController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/algemene-voorwaarden', [PagesController::class, 'tos']);
Route::get('/privacy-verklaring', [PagesController::class, 'privacy']);
Route::get('/klachten', [PagesController::class, 'complaint']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/over-ons', [PagesController::class, 'aboutus']);
Route::get('/veelgestelde-vragen', [PagesController::class, 'faq']);
Route::get('/reparatie', [PagesController::class, 'repair']);
Route::get('/custom-pc', [PagesController::class, 'custompc']);
Route::get('/gaming-pc', [GamingpcController::class, 'index'])->name('gamingpc.index');
Route::get('/gaming-pc/{id}', [GamingpcController::class, 'show'])->name('gamingpc.show');

Route::middleware(['web', 'auth'])->group(function () {
    Route::resource('/account', AccountController::class);
});


Route::middleware(['web', 'isAdmin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/orders', [OrderController::class, 'index'])->name('order.index');
    Route::get('/admin/computers', [GamingpcController::class, 'admin'])->name('gamingpc.index');
    Route::get('/admin/users', [UserController::class, 'index'])->name('user.index');

    Route::get('/gaming-pc/create', [GamingpcController::class, 'create'])->name('gamingpc.create');
    Route::get('/gaming-pc/{id}/edit', [GamingpcController::class, 'edit'])->name('gamingpc.edit');
    Route::post('/gaming-pc', [GamingpcController::class, 'store'])->name('gamingpc.store');
    Route::put('/gaming-pc/{id}', [GamingpcController::class, 'update'])->name('gamingpc.update');
    Route::delete('/gaming-pc/{id}', [GamingpcController::class, 'destroy'])->name('gamingpc.destroy');
});

require __DIR__.'/auth.php';
