<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\ClientsDataTable;
use App\DataTables\InvoicesDataTable;
use App\Models\Block;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Unit;
use App\Models\Zone;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class InvoiceController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(InvoicesDataTable $invoicesDataTable)
    {
        $client = Auth::user()->name ?? '';
        return $invoicesDataTable->render('dashboard.invoices.index', [
            'title' => trans('site.invoices'),
            'model' => 'invoices',
            'count' => $client
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('dashboard.invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'currency' => 'required|string',

            'amount' => 'required|numeric',


        ]);

        $request_data = $request->except('_token', '_method');

        $request_data['client_id'] = Session::get('id') ?? Auth::id();

        $invoice = Invoice::create($request_data);

        session()->forget('id');

        return redirect(route('dashboard.invoices.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, InvoicesDataTable $invoicesDataTable)
    {
        $client = Client::find($id)->name ?? '';
        return $invoicesDataTable->render('dashboard.invoices.index', [
            'title' => trans('site.invoices'),
            'model' => 'invoices',
            'count' => $client
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $invoice = Invoice::find($id);

        return view('dashboard.invoices.edit', compact('invoice'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([

            'currency' => 'required|string',

            'amount' => 'required|numeric',


        ]);

        $invoice = Invoice::find($id);

        $request_data = $request->except('_token', '_method');
        $invoice->update($request_data);


        return redirect(route('dashboard.invoices.index'));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Invoice::find($id);
        $client->delete();

        return back();
    }
}
