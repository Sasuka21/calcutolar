<?php

use Illuminate\Support\Facades\Route;

Route::get('calculator', function () {
    echo 'Hello from the caculator package!';
});

Route::get('add/{a}/{b}', '\Tai\Calculator\CalculatorController@add');
Route::get('sub/{a}/{b}', '\Tai\Calculator\CalculatorController@subtract');


