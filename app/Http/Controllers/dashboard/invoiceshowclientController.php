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

class invoiceshowclientController extends controller
{






    public function create()
    {
        $clients = Client::get();
        $units = Unit::get();

        return view('dashboard.invoicesbase.create', compact('clients', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([


            'date' => 'required',


        ]);

        $request_data = $request->except('_token', '_method');

        $request_data['type'] = Session::get('type') ?? '';

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


        return view('dashboard.invoiceshowclient.edit', compact('invoice','clients'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $invoice = BasicInvoice::find($id);

        $request->validate([

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
