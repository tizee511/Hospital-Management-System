<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\posts;
use Illuminate\Support\Facades\App;

class DashboardController extends Controller
{
    public function index()
    {
        $post = posts::all();
        App::setLocale('ar');
            return $post->name; 
        // 
        // dd($post);
        // echo $post->translate('en')->name; // My first post
        return "Hello";
        // return view("admin.dashboard");
    }
}
