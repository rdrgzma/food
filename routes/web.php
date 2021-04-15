<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\AdminController;

Route::prefix('admin')
                ->namespace('Admin')
                ->group(function(){
                    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
                    Route::get('plans', [PlanController::class, 'index'])->name('plans.index');
                    Route::post('plans', [PlanController::class, 'store'])->name('plans.store');
                    Route::get('plans/create', [PlanController::class, 'create'])->name('plans.create');
                    Route::any('plans/search', [PlanController::class, 'search'])->name('plans.search');
                    Route::delete('plans/{url}', [PlanController::class, 'destroy'])->name('plans.destroy');
                    Route::get('plans/{url}', [PlanController::class, 'show'])->name('plans.show');
                    Route::put('plans/{url}', [PlanController::class, 'update'])->name('plans.update');
                    Route::get('plans/{url}/edit', [PlanController::class, 'edit'])->name('plans.edit');
                });
Route::get('/', function () {
    return view('welcome');
});
