<?php

namespace App\Http\Controllers\dashboard;


use App\DataTables\ServicesDataTable;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Service;
use App\Models\Unit;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class ServiceController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ServicesDataTable $dataTable)
    {
        return $dataTable->render('dashboard.services.index', [
            'title' => trans('site.services'),
            'model' => 'services',
            'count' => $dataTable->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::get();
        $units = Unit::get();
        $emlpoyees = Employee::get();
        return view('dashboard.services.create', compact('clients', 'units', 'emlpoyees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'client_id' => 'required',
            'employee_id' => 'required',
            'unit_id' => 'required',
            'services_type' => 'required',
            'date' => 'required',


        ]);

        $request_data = $request->except('_token', '_method');


        $services = Service::create($request_data);


        return redirect(route('dashboard.services.index'));
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);
        $clients = Client::get();
        $units = Unit::get();
        $emlpoyees = Employee::get();

        return view('dashboard.services.edit', compact('service', 'clients', 'units', 'emlpoyees'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::find($id);

        $request->validate([

            'client_id' => 'required',
            'employee_id' => 'required',
            'unit_id' => 'required',
            'services_type' => 'required',
            'date' => 'required',


        ]);


        $request_data = $request->except('_token', '_method');
        $service->update($request_data);


        return redirect(route('dashboard.services.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        $service->delete();

        return back();
    }
}
