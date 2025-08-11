<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
