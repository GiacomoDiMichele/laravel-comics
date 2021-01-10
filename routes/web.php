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
    $array_series = config('series');
    $data = [
        'series' => $array_series
    ];
    return view('home', $data);
});

Route::get('/dettagli/{id}', function ($id) {

    $array_series = config('series');

    $singolo_film = $array_series[$id];

    $data = [
        'film' => $singolo_film
    ];

    return view('dettagli', $data);

})->name('dettagli-film');
