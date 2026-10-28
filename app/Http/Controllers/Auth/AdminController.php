<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminRequest;
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

 
    public function store(AdminRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard.admin'));
    
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

  
    public function update(AdminRequest $request)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
