<?php


use App\Http\Controllers\DataMapperController;
use Illuminate\Support\Facades\Route;

Route::get("/data-mapper", [DataMapperController::class, 'index']);


