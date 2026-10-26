<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function index()
    {
        return "Hello";
        // $post = posts::all();
        // App::setLocale('ar');
            return $post->name; 
        // 
        // dd($post);
        // echo $post->translate('en')->name; // My first post
        return "Hello";
        // return view("admin.dashboard");
    }
}
