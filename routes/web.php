<?php

use App\Http\Controllers\VeiculoController;

Route::get('/', [VeiculoController::class, 'MostrarHome'])->name('home-adm');
Route::get('/cadastra-veiculo', [VeiculoController::class, 'MostrarVeiculo'])->name('show-cadastro-veiculo');
Route::post('/cadastrar-veiculo', [VeiculoController::class, 'CadastrarVeiculo'])->name('cadastrar-veiculo');
Route::get('/listaveiculos', [VeiculoController::class, 'ListaVeiculo'])->name('lista-veiculos');
