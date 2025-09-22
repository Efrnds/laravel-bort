<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/status', function () {
    return 'OK';
});

Route::get('soma', function () {
    return view('cu');
});

// Route::get('soma', function () {
//     $a = 100;
//     $b = 100;
//     $soma = $a + $b;
//     return "A soma é {$soma}";
// });

Route::get('soma/{v1}/{v2}', function ($v1, $v2) {
    $soma = $v1 + $v2;
    return view('cu', compact('soma'));
});

Route::get('adicionar-produto/{param1}/{param2?}', function ($param1, $param2 = null) {
    if ($param2 !== null) {
        return "Produto adicionado com sucesso! Parâmetro 1: {$param1}, Parâmetro 2: {$param2}";
    } else {
        return "Produto adicionado com sucesso! Parâmetro 1: {$param1}, Parâmetro 2 não informado.";
    }
});

Route::get('/series', [SeriesController::class, 'listarSeries']);
