<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Caio";

    return view('welcome', ['nome' => $nome]);
});


Route::get('/contatos', function () {
    return view('contact');
});


