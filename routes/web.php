<?php

use App\Http\Controllers\FornecimentoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Users
    Route::get('/users-index',[UserController::class,'index'])->name('user.index');

    //Produtos
    Route::resources([
        'almoxarifado'=>ProdutoController::class
    ]);

    Route::get('/almoxarifado/show',[ProdutoController::class,'show'])->name('almoxarifado.show');

    Route::get('/fornecimentos/create', [FornecimentoController::class, 'create'])->name('fornecimento.create');
    Route::post('/fornecimentos', [FornecimentoController::class, 'store'])->name('fornecimentos.store');




});

require __DIR__.'/auth.php';
