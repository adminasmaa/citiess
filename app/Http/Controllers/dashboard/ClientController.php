<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\ClientsDataTable;
use App\DataTables\InvoicesDataTable;
use App\Models\Block;
use App\Models\Client;
use App\Models\Unit;
use App\Models\Zone;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class ClientController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ClientsDataTable $dataTable)
    {
        return $dataTable->render('dashboard.clients.index', [
            'title' => trans('site.clients'),
            'model' => 'clients',
            'count' => $dataTable->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zones = Zone::all();
        $blocks = Block::all();
        $units = Unit::all();
        return view('dashboard.clients.create', compact('zones', 'blocks', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required|string',
            'member' => 'required|numeric',


        ]);

        $request_data = $request->except('_token', '_method', 'documents');


        $client = Client::create($request_data);

        if ($request->hasFile('documents')) {
            $thumbnail = $request->file('documents');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(100, 100)->save(public_path('images/clients' . '/' . $filename));
            $client->documents = $filename;
            $client->save();
        }

        return redirect(route('dashboard.clients.index'));
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

    public function createinvoice($id)
    {

        Session::put('id', $id);
        return view('dashboard.invoices.create');


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::find($id);
        $zones = Zone::all();
        $blocks = Block::all();
        $units = Unit::all();
        return view('dashboard.clients.edit', compact('client', 'zones', 'blocks', 'units'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([

            'name' => 'required|string',

            'member' => 'required|numeric',


        ]);

        $client = Client::find($id);

        $request_data = $request->except('_token', '_method', 'documents');
        $client->update($request_data);

        if ($request->hasFile('documents')) {
            $thumbnail = $request->file('documents');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(100, 100)->save(public_path('images/clients' . '/' . $filename));
            $client->documents = $filename;
            $client->save();
        }

        return redirect(route('dashboard.clients.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);
        $client->delete();

        return back();
    }
}
