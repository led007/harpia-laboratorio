<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClienteController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes');
Route::get('/clientes/novo', [ClienteController::class, 'novo'])->name('clientes.novo');
Route::get('/clientes/editar/{id}', [ClienteController::class, 'editar'])->name('clientes.editar');
Route::post('/clientes/salvar', [ClienteController::class, 'salvar'])->name('clientes.salvar');
Route::get('/clientes/deletar/{id}', [ClienteController::class, 'deletar'])->name('clientes.deletar');
