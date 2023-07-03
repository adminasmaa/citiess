<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\ClientsDataTable;
use App\DataTables\InvoicesDataTable;
use App\DataTables\invoiceTypeDataTable;
use App\Models\BasicInvoice;
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

class InvoiceTypeController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(invoiceTypeDataTable $invoicesDataTable)
    {
        return $invoicesDataTable->render('dashboard.invoiceType.index', [
            'title' => trans('site.invoiceType'),
            'model' => 'invoiceType',

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('dashboard.invoiceType.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'invoice_price' => 'required|numeric',




        ]);

        $request_data = $request->except('_token', '_method');

        $request_data['client_id'] = Session::get('id') ?? Auth::id();
        $request_data['type'] ='type';

        $invoice = BasicInvoice::create($request_data);

        session()->forget('id');

        return redirect(route('dashboard.invoiceType.index'));

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

        return view('dashboard.invoiceType.edit', compact('invoice'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([

            'invoice_price' => 'required|numeric',


        ]);

        $invoice = BasicInvoice::find($id);

        $request_data = $request->except('_token', '_method');
        $invoice->update($request_data);


        return redirect(route('dashboard.invoiceType.index'));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = BasicInvoice::find($id);
        $client->delete();

        return back();
    }
}
