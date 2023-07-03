<?php

namespace App\Http\Controllers\dashboard;


use App\DataTables\NotesDataTable;
use App\Models\Employee;
use App\Models\Notes;
use App\Models\Section;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class NoteController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(NotesDataTable $dataTable)
    {
        return $dataTable->render('dashboard.notes.index', [
            'title' => trans('site.notess'),
            'model' => 'notes',
            'count' => $dataTable->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections=Section::get();
        $employes=Employee::get();
        return view('dashboard.notes.create',compact('sections','employes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'employee_id' => 'required',
            'section_id' => 'required',
            'note' => 'required|string',
            'notes' => 'required|string',


        ]);

        $request_data = $request->except('_token', '_method');


        $notes = Notes::create($request_data);


        return redirect(route('dashboard.notes.index'));
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $note = Notes::find($id);
        $sections=Section::get();
        $employes=Employee::get();

        return view('dashboard.notes.edit', compact('note','sections','employes'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $note = Notes::find($id);

        $request->validate([


            'employee_id' => 'required',
            'section_id' => 'required',
            'note' => 'required|string',
            'notes' => 'required|string',


        ]);


        $request_data = $request->except('_token', '_method');
        $note->update($request_data);


        return redirect(route('dashboard.notes.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $note = Notes::find($id);
        $note->delete();

        return back();
    }
}
