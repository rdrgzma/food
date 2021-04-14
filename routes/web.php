<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanController;
Route::get('admin/plans', [PlanController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
