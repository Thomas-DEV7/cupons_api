<?php

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
    return view('welcome');
});

use App\Http\Controllers\CupomController;

// Rota para listar todos os cupons
Route::get('/cupons', [CupomController::class, 'index']);

// Rota para exibir um cupom específico
Route::get('/cupons/{id}', [CupomController::class, 'show']);

// Rota para criar um novo cupom
Route::post('/cupons', [CupomController::class, 'store']);

// Rota para atualizar um cupom existente
Route::put('/cupons/{id}', [CupomController::class, 'update']);

// Rota para excluir um cupom existente
Route::delete('/cupons/{id}', [CupomController::class, 'destroy']);
