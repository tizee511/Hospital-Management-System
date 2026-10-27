<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function index()
    {
        // return "Hello";
        
        return view("Dashboard.index");
    }
}
