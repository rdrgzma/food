<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\AdminController;


Route::get('admin', [AdminController::class, 'index'])->name('admin.home');
Route::get('admin/plans', [PlanController::class, 'index'])->name('plans.index');
Route::post('admin/plans', [PlanController::class, 'store'])->name('plans.store');
Route::get('admin/plans/create', [PlanController::class, 'create'])->name('plans.create');
Route::any('admin/plans/search', [PlanController::class, 'search'])->name('plans.search');
Route::delete('admin/plans/{url}', [PlanController::class, 'destroy'])->name('plans.destroy');
Route::get('admin/plans/{url}', [PlanController::class, 'show'])->name('plans.show');
Route::put('admin/plans/{url}', [PlanController::class, 'update'])->name('plans.update');
Route::get('admin/plans/{url}/edit', [PlanController::class, 'edit'])->name('plans.edit');


Route::get('/', function () {
    return view('welcome');
});
