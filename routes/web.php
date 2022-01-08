<?php

use Illuminate\Support\Facades\Route;

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

    $data = [
        'dados' => [
            'user' => 'Dimas Neto',
            'post' => 'Mensagem do meu post.'
        ]
    ];

    return view('welcome', $data);
});

