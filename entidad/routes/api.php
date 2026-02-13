<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoController;

Route::apiResource('motos', MotoController::class);
