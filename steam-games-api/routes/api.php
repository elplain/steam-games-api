<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Appp\HttpControllers\GameController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route :: apiResource ( ' games' ,   Games Controller :: class );