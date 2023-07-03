<?php

namespace App\Http\Controllers\dashboard;


use App\DataTables\RepairsDataTable;
use App\Models\AcRepair;
use App\Models\Employee;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class RepairController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(RepairsDataTable $dataTable)
    {
        return $dataTable->render('dashboard.repairs.index', [
            'title' => trans('site.repairs'),
            'model' => 'repairs',
            'count' => $dataTable->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $emlpoyees = Employee::get();
        return view('dashboard.repairs.create', compact('emlpoyees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'time' => 'required',
            'type' => 'required',
            'price' => 'required|numeric',
            'employee_id' => 'required',


        ]);

        $request_data = $request->except('_token', '_method');


        $repair = AcRepair::create($request_data);


        return redirect(route('dashboard.repairs.index'));
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = AcRepair::find($id);
        $emlpoyees = Employee::get();

        return view('dashboard.repairs.edit', compact('emlpoyees','data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = AcRepair::find($id);

        $request->validate([

            'time' => 'required',
            'type' => 'required',
            'price' => 'required|numeric',
            'employee_id' => 'required',


        ]);


        $request_data = $request->except('_token', '_method');
        $data->update($request_data);


        return redirect(route('dashboard.repairs.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = AcRepair::find($id);
        $data->delete();

        return back();
    }
}
