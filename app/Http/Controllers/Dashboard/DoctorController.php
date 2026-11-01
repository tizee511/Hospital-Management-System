<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    public function index()
    {
        // return "ooo";
        $doctors = Doctor::all();
        
        // return $doctors;
        return view('Dashboard.Doctors.index',compact('doctors'));

    }
    public function create()
    {
        $sections = Section::all();
        $appointments = Appointment::all();
        return view('Dashboard.Doctors.add',compact('appointments','sections'));

        // abort(404);
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        DB::beginTransaction();

        try {
            $doctors             = new Doctor();
            $doctors->email      = $request->email;
            $doctors->password   = Hash::make ($request->password);
            $doctors->section_id = $request->section_id;
            $doctors->phone      = $request->phone;
            $doctors->price = $request->price;
            $doctors->status     = 1;
            $doctors->save ();
            // store trans
            $doctors->name         = $request->name;
            $doctors->appointments = implode (",", $request->appointments);
            $doctors->save ();
            //code...

        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return redirect ()->back ()->withErrors (['error' => $th->getMessage ()]);

            }
        // abort(404);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }
}
