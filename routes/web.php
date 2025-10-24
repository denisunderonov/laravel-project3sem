<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Auth

Route::get("/auth/signin", AuthController::class ."signin");
Route::post("/auth/registration", AuthController::class ."registration");

//Main

Route::get('/', [MainController::class, 'index']);

Route::get('/about', function () {
    return view('main/about');
} );

Route::get('/full_image/{img}', [MainController::class,'show']);

Route::get('/contacts', function () { 
    $array = [
        'email'=> 'denisunderonov2@gmail.com',
        'tg'=> '@denisunderonov'
    ];

    return view('main/contacts', ['contacts' => $array]);
} );