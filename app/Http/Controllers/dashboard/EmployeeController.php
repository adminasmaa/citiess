<?php

namespace App\Http\Controllers\dashboard;


use App\DataTables\EmployeesDataTable;
use App\Models\Employee;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class EmployeeController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(EmployeesDataTable $dataTable)
    {
        return $dataTable->render('dashboard.employees.index', [
            'title' => trans('site.employees'),
            'model' => 'employees',
            'count' => $dataTable->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('dashboard.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'first_name' => 'required|string',
            'email' => 'required|email|string|unique:employees',


        ]);

        $request_data = $request->except('_token', '_method');


        $client = Employee::create($request_data);


        return redirect(route('dashboard.employees.index'));
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Employee::find($id);

        return view('dashboard.employees.edit', compact('client'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Employee::find($id);

        $request->validate([

            'first_name' => 'required|string',
            'email' => ['required', Rule::unique('employees')->ignore($client->id),],


        ]);


        $request_data = $request->except('_token', '_method');
        $client->update($request_data);


        return redirect(route('dashboard.employees.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Employee::find($id);
        $client->delete();

        return back();
    }
}
