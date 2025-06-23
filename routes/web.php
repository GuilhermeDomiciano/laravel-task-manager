<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Olá, mundo!';
});

Route::get('/helloview', function(){
    return view('hello');
});

Route::resource('tasks', TaskController::class);