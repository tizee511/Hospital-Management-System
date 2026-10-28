<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\AdminRequest;
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

  
    public function update(AdminRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
