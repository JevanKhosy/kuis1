<?php

use App\Http\Controllers\Kampus_PSDKU;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/kampuspmk', [Kampus_PSDKU::class, 'index']
);
