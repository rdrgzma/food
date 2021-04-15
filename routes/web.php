<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DetailPlanController;

Route::prefix('admin')
                ->namespace('Admin')
                ->group(function(){

                     /**
                     * Routes Details Plans
                     */
                    Route::get('plans/{url}/details/create',[DetailPlanController::class,'create'])->name('details.plan.create');
                    Route::delete('plans/{url}/details/{idDetail}',[DetailPlanController::class,'destroy'])->name('details.plan.destroy');
                    Route::get('plans/{url}/details/{idDetail}',[DetailPlanController::class,'show'])->name('details.plan.show');
                    Route::put('plans/{url}/details/{idDetail}',[DetailPlanController::class,'update'])->name('details.plan.update');
                    Route::get('plans/{url}/details/{idDetail}/edit',[DetailPlanController::class,'edit'])->name('details.plan.edit');
                    Route::post('plans/{url}/details',[DetailPlanController::class,'store'])->name('details.plan.store');
                    Route::get('plans/{url}/details',[DetailPlanController::class,'index'])->name('details.plan.index');   
                    /**
                     * Routes Dashboard
                     */
                    Route::get('/', [AdminController::class, 'index'])->name('admin.home');

                    /**
                     * Routes Plans
                     */
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
