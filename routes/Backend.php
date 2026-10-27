<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard_admin', [DashboardController::class, 'index'])->name('dashboard_admin');
    

