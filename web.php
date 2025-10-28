<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tiket/{tempat}/{harga}', function ($tempat, $harga) {
    return view('tiket', [
        'tempat' => ucfirst($tempat),
        'harga' => $harga
    ]);
});
