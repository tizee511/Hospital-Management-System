<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get ('/dashboard_admin', [DashboardController::class, 'index'])->name ('dashboard_admin');
Route::localize (function ()
{
    Route::get ('/dashboard/user', function ()
    {
        return view ('Dashboard.User.dashboard_user');
    })->middleware (['auth'])->name ('dashboard.user');

    Route::get ('/dashboard/admin', function ()
    {
        // return "hhh";
        return view ('Dashboard.Admin.dashboard');
    })->middleware (['auth:admin'])->name ('dashboard.admin');

    Route::middleware ('auth')->group (function ()
    {
        Route::get ('/profile', [ProfileController::class, 'edit'])->name ('profile.edit');
        Route::patch ('/profile', [ProfileController::class, 'update'])->name ('profile.update');
        Route::delete ('/profile', [ProfileController::class, 'destroy'])->name ('profile.destroy');
    });


    
    require __DIR__.'/auth.php';
});





