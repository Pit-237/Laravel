<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);
Route::get('/contato', [App\Http\Controllers\Contato::class, 'contato']);
Route::get('/notas', [App\Http\Controllers\Notas::class, 'notas']);
Route::get('/login-aluno', [App\Http\Controllers\Aluno::class, 'logAluno']);
Route::get('/login-professor', [App\Http\Controllers\Professor::class, 'logProfessor']);
Route::get('/aluno/consultar-horarios', [App\Http\Controllers\Aluno::class, 'horarioAulasAlunos']);
Route::get('/professor/consultar-horarios', [App\Http\Controllers\Professor::class, 'horarioAulasProfessor']);
Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'menuAluno']);
Route::get('/professor', [App\Http\Controllers\Professor::class, 'menuProfessor']);
Route::get('/aluno/consultar-lista-presenca', [App\Http\Controllers\Aluno::class, 'listaPresencaAluno']);
Route::get('/professor/consultar-lista-presenca', [App\Http\Controllers\Professor::class, 'listaPresencaProfessor']);
Route::get('/professor/ocorrencia', [App\Http\Controllers\Professor::class, 'ocorrencia']);
Route::get('/professor/dar_notas', [App\Http\Controllers\Professor::class, 'darNota']);






