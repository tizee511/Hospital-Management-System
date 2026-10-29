<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create()
    {
        // abort(404);
        $sections = Section::all ();
        return view ('Dashboard.Sections.index', compact ('sections'));
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request)
    {
        // abort(404);
        Section::create ([
            'name' => $request->input ('name'),
        ]);

        session ()->flash ('add');
        return redirect ()->route ('Sections.index');
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
        $section = Section::findOrFail ($request->id);
        $section->update ([
            'name' => $request->input ('name'),
        ]);
        session ()->flash ('edit');
        return redirect ()->route ('Sections.index');
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(Request $request)
    {
        // abort(404);
        Section::findOrFail ($request->id)->delete ();
        session ()->flash ('delete');
        return redirect ()->route ('Sections.index');
    }
}
