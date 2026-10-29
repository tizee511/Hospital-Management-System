<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Promise\Each;
use Illuminate\Support\Facades\Route;


Route::get ('/dashboard_admin', [DashboardController::class, 'index'])->name ('dashboard_admin');
Route::localize (function ()
{
    //*============================= [User route] =============================

    Route::get ('/dashboard/user', function ()
    {
        return view ('Dashboard.User.dashboard_user');
    })->middleware (['auth'])->name ('dashboard.user');
    //*=========================== [End User Route] ===========================

    //*============================= [Admin route] =============================
    Route::get ('/dashboard/admin', function ()
    {
        // return "hhh";
        return view ('Dashboard.Admin.dashboard');
    })->middleware (['auth:admin'])->name ('dashboard.admin');
    //*=========================== [End Admin Route] ===========================

    // Route::middleware (['auth:admin'])->group (function ()
    // {
    //*============================ [Sections Route] ================================
    Route::resource ('Sections', SectionController::class)->middleware(['auth:admin']);
    //*=========================== [End Sections Route] ===========================
    //*============================ [Doctors Route] ================================
    Route::resource ('Doctors', DoctorController::class)->middleware(['auth:admin']);
    //*=========================== [End Doctors Route] ===========================
    // });
    Route::middleware ('auth')->group (function ()
    {
        Route::get ('/profile', [ProfileController::class, 'edit'])->name ('profile.edit');
        Route::patch ('/profile', [ProfileController::class, 'update'])->name ('profile.update');
        Route::delete ('/profile', [ProfileController::class, 'destroy'])->name ('profile.destroy');
    });
    require __DIR__.'/auth.php';
});





