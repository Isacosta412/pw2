<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});
/*
//routes/web.php
Route::get('/aluno', [AlunoController::class,"index"]);
//carrega o formulario
Route::get('/aluno/create', [AlunoController::class,"create"]);
//recebe os dados do formulario para ser salvo na função store
Route::post('/aluno', [AlunoController::class,"store"])->name('aluno.store');
//rota para excluir os dados
//Route::get('/aluno/destroy/{id}', [AlunoController::class,"destroy"])->name('aluno.destroy');

Route::delete('/aluno/{$aluno}', [AlunoController::class,"destroy"])->name('aluno.destroy');

Route::get('/aluno/edit/{id}', [AlunoController::class,"edit"]) -> name('aluno.edit');

Route::post('/aluno', [AlunoController::class,"update"])->name('aluno.update');
*/
Route::resource('aluno', AlunoController::class);
Route::post('/aluno/search', [AlunoController::class,"search"])->name('aluno.search');
