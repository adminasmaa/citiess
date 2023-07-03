<?php

namespace App\Http\Controllers\dashboard;


use App\DataTables\InvoiceBasesDataTable;
use App\DataTables\InvoiceClientDataTable;
use App\DataTables\InvoiceShowDataTable;
use App\Models\BasicInvoice;
use App\Models\Client;
use App\Models\Unit;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class InvoiceBaseController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(InvoiceBasesDataTable $dataTable, Request $request)
    {
        Session::put('type', $request['type']);
        return $dataTable->render('dashboard.invoicesbase.index', [
            'title' => trans('site.invoicesbase'),
            'model' => 'invoicesbase',
            'count' => $dataTable->count()
        ]);
    }

    public function invoicesAll(InvoiceClientDataTable $dataTable)
    {
        return $dataTable->render('dashboard.invoicesbase.AllInvoice', [
            'title' => trans('site.invoicesbase'),
            'model' => 'invoicesbase',
            'count' => $dataTable->count()
        ]);


    }

    public function show (){

    }

    public function invoicesAllShow($id,InvoiceShowDataTable $dataTable)
    {
          $client = Client::find($id)->name ?? '';
                    $clients = Client::find($id) ?? '';

          Session::put('client', $clients);

        return $dataTable->render('dashboard.invoicesbase.All', [
            'title' => trans('site.invoicesbase'),
            'model' => 'invoicesbase',
            'count' => $client
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Session::get('client');
        $units = Unit::get();

        return view('dashboard.invoicesbase.create', compact('clients', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
// return $request;
        $request->validate([
            'client_id' => 'required',
            // 'unit_id' => 'required',
            // 'amount' => 'required|numeric',

            'date' => 'required',


        ]);

        $request_data = $request->except('_token', '_method');

        $request_data['type'] = $request->type ?? '';

        $invoice = BasicInvoice::create($request_data);


        return redirect(route('dashboard.invoicesbase.index'));
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $invoice = BasicInvoice::find($id);
         
        $clients = $invoice->client ?? '';
        $units = Unit::get();


        return view('dashboard.invoicesbase.edit', compact('invoice', 'clients', 'units'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $invoice = BasicInvoice::find($id);

        $request->validate([
            'client_id' => 'required',
            // 'unit_id' => 'required',
            // 'amount' => 'required|numeric',
            'date' => 'required',


        ]);


        $request_data = $request->except('_token', '_method');
        $invoice->update($request_data);


        return redirect(route('dashboard.invoicesbase.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $BasicInvoice = BasicInvoice::find($id);
        $BasicInvoice->delete();

        return back();
    }
}
