<?php

namespace App\Http\Controllers\dashboard;


use App\DataTables\InstallmentDataTable;
use App\Models\Installment;
use App\Models\Unit;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;

class InstallmentController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(InstallmentDataTable $dataTable)
    {
        return $dataTable->render('dashboard.installments.index', [
            'title' => trans('site.installments'),
            'model' => 'installments',
            'count' => $dataTable->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units=Unit::all();
        return view('dashboard.installments.create',compact('units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'amount' => 'required|numeric',
            'price' => 'required|numeric',
            'delay_total' => 'required|numeric',


        ]);

        $request_data = $request->except('_token', '_method');
        Installment::create($request_data);

        return redirect(route('dashboard.installments.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data= Installment::find($id);
        $units=Unit::all();
        return view('dashboard.installments.edit', compact('data','units'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([

            'amount' => 'required|numeric',
            'price' => 'required|numeric',
            'delay_total' => 'required|numeric',


        ]);
        $data= Installment::find($id);

        $request_data = $request->except('_token', '_method');
        $data->update($request_data);

        return redirect(route('dashboard.installments.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data= Installment::find($id);

        $data->delete();

        return back();
    }
}
