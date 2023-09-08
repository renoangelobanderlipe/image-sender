<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopulateController;

Route::controller(PopulateController::class)->prefix('populate')->group(function () {
  Route::get('/', 'index');
});
