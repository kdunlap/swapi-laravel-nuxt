<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api/v1')->group(function () {
    Route::get('/people', [PeopleController::class, 'index']);
    Route::get('/people/{id}', [PeopleController::class, 'show']);

    Route::get('/movies', [PeopleController::class, 'index']);
    Route::get('/movies/{id}', [PeopleController::class, 'show']);
});



