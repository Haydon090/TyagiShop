<?php
use App\Http\Controllers\TyagiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
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
    return view('auth/login');
});


Route::get('/login/vk',[SocialController::class,'index'])->name('vk.auth');
Route::get('/login/vk/callback',[SocialController::class,'callback']);

Route::get('/dashboard', [TyagiController::class, 'index'])->name('dashboard');
Route::post('/create', [TyagiController::class, 'store'])->name('tyagi.store');
Route::get('/create',[TyagiController::class,'create()'])->name('tyagi.create');
Route::resource('tyagi', TyagiController::class);
Route::get('/edit/{id}', [TyagiController::class,'edit'])->name('tyagi.edit');
Route::post('/edit/{id}', [TyagiController::class,'update'])->name('tyaga.update');
Route::get('/show/{id}', [TyagiController::class,'show'] )->name('tyagi.show');
Route::delete('/dashboard',[TyagiController::class,'destroy'])->name('tyagi.destroy');
require __DIR__.'/auth.php';
