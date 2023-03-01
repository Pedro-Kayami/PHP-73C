<?php

use App\Http\Controllers\ContatoController;
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

// rota raiz que retorna uma view default do projeto
Route::get('/', function () {
    return view('welcome');
});

// rota que retorna uma ola
Route::get('/olamundo', function () {
    return "ola mundo";
});

// rota GET que retorna uma msg com parâmetro não obrigatorio
Route::get('/faleconosco/{id?}', function ($id = null) {
    return "recebi o valor = $id";
});

// // rota POST chamada de um form, com função ‘dd’
// Route::post('/contato', function () {
//     dd($_POST);
// });

Route::post('/contato', ['uses' => 'App\Http\Controllers\ContatoController@index']);
