<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ApiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api-data1', [ApiController::class, 'index']);
Route::get('/api-data', function () {

    $response = Http::get('https://lelamonline.com/admin/api/v1/index.php', [
        'token' => '5cb2c9b569416b5db1604e0e12478ded'
    ]);

    $data = $response->json();

    return view('internalapi', compact('data'));
});
Route::livewire('/post/create', 'pages::post.create');
Route::livewire('/post/new', 'pages::post.new');
Route::get('/user-location', [LocationController::class, 'getUserLocation']);