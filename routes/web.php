<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/status', function () {
    return 'OK';
});

Route::get('cu', function () {
    return view('cu');
});

Route::get('soma', function () {
    $a = 100;
    $b = 100;
    $soma = $a + $b;
    return "A soma é {$soma}";
});

Route::get('cu/{v1}/{v2}', function ($v1, $v2) {
    $soma = $v1 + $v2;
    return view('cu', compact('soma'));
});

Route::get('adicionar-produto/{param1}/{param2}', function ($param1, $param2) {
    return "Produto adicionado com sucesso! Parâmetro 1: {$param1}, Parâmetro 2: {$param2}";
});

Route::get('/series', function () {
    $series = ['Breaking Bad', 'Game of Thrones', 'Stranger Things', 'The Crown'];

    $html = "<ul>";
    foreach ($series as $serie) {
        $html .= "<li>{$serie}</li>";
    }
    $html .= "</ul>";
    return $html;
});
