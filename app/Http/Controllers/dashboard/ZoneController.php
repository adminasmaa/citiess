<?php

namespace App\Http\Controllers\dashboard;
use App\Models\BasicInvoice;

use App\Models\Block;
use App\Models\Unit;
use App\Models\Zone;
use Illuminate\Routing\Controller;
use Response;
use App\DataTables\ZonesDataTable;
use Illuminate\Http\Request;

class ZoneController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ZonesDataTable $zonesDataTable)
    {
        return $zonesDataTable->render('dashboard.zones.index', [
            'title' => trans('site.zones'),
            'model' => 'zones',
            'count' => $zonesDataTable->count()
        ]);
    }

    public function zoneSelectBlock($id){


        $zones = Block::where('zone_id', $id)->get();

        return Response::json($zones);
    }

    public function invoicetype($id){

        $invoice = BasicInvoice::where('invoice_name', $id)->first()->invoice_price;
    //   dd($invoice);


        return Response::json($invoice);
    }



    public function BlockSelectUnit($id){


 $zones = Unit::where('block_id',$id)->where('status','=','Empty Unit')->Orwhere('status','=','Units Offered For Sale')->get();

        return Response::json($zones);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.zones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request_data = $request->except('_token', '_method');
        Zone::create($request_data);

        return redirect(route('dashboard.zones.index'));
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
        $zone = Zone::find($id);
        return view('dashboard.zones.edit', compact('zone'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $zone = Zone::find($id);
        $request_data = $request->except('_token', '_method');
        $zone->update($request_data);

        return redirect(route('dashboard.zones.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $zone = Zone::find($id);
        $zone->delete();

        return back();
    }
}
