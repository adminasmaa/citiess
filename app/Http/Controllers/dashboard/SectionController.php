<?php

namespace App\Http\Controllers\dashboard;


use App\DataTables\SectionsDataTable;
use App\Models\Employee;
use App\Models\Section;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class SectionController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SectionsDataTable $dataTable)
    {
        return $dataTable->render('dashboard.sections.index', [
            'title' => trans('site.sections'),
            'model' => 'sections',
            'count' => $dataTable->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $emlpoyees = Employee::get();
        return view('dashboard.sections.create',compact('emlpoyees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'section' => 'required|string',
            'position' => 'required|string',
            'jod_id' => 'required|numeric',


        ]);

        $request_data = $request->except('_token', '_method');


        $section = Section::create($request_data);


        return redirect(route('dashboard.sections.index'));
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $section = Section::find($id);
        $emlpoyees = Employee::get();

        return view('dashboard.sections.edit', compact('section','emlpoyees'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $section = Section::find($id);

        $request->validate([

            'section' => 'required|string',
            'position' => 'required|string',
            'jod_id' => 'required|numeric',



        ]);


        $request_data = $request->except('_token', '_method');
        $section->update($request_data);


        return redirect(route('dashboard.sections.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $section = Section::find($id);
        $section->delete();

        return back();
    }
}
