<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminRequest;
use App\Providers\AppServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AdminController extends Controller
{
   
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

 
    public function store(AdminRequest $request) : RedirectResponse
    {
        
        // return $request;
            $request->authenticate();
            $request->session()->regenerate();
            return redirect(AppServiceProvider::ADMIN);
        // }
        // return back ()->withInput ()->withErrors (['email' => 'These credentials do not match our records.']);

        // return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.']);

        
    
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

  
    public function update(Request $request)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request):RedirectResponse 
    { 
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

        

    }
}
