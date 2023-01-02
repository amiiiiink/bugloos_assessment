<?php

use Illuminate\Support\Facades\Route;
use Mapping\Controllers\DataMapperController;


Route::get("/data-mapper", DataMapperController::class);
