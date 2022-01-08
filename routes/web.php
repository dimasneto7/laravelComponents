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

    $data = array(

        'posts' => [
            [
                'usuario' => 'Dimas',
                'mensagem' => 'Mensagem do Dimas'
            ],
            [
                'usuario' => 'Priscilla',
                'mensagem' => 'Mensagem da Priscilla'
            ],
            [
                'usuario' => 'Isabella',
                'mensagem' => 'Mensagem da Isabella'
            ],
        ]
    );

    return view('welcome', $data);
});

