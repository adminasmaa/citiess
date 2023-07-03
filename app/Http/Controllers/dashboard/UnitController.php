<?php

namespace App\Http\Controllers\dashboard;


use App\DataTables\ReportsDataTable;
use App\DataTables\UnitsDataTable;
use App\Models\Block;
use App\Models\Unit;
use App\Models\Zone;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;

class UnitController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UnitsDataTable $dataTable)
    {
        return $dataTable->render('dashboard.units.index', [
            'title' => trans('site.units'),
            'model' => 'units',
            'count' => $dataTable->count()
        ]);
    }

    public function Reports(ReportsDataTable $dataTable)
    {
        return $dataTable->render('dashboard.reports.index', [
            'title' => trans('site.reports'),
            'model' => 'reports',
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
        return view('dashboard.units.create', compact('zones', 'blocks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'name_ar' => 'required|string',


            'price' => 'required|numeric',
            'number_room' => 'required|numeric',
            'units_number' => 'required|numeric',
            'area' => 'required|numeric',

        ]);

        $request_data = $request->except('_token', '_method');
        if ($request->zone_id == '0') {

            $request_data['zone_id'] = null;
            $request_data['block_id'] = null;
        }

        for ($i = 0; $i < $request_data['units_number']; $i++) {
            Unit::create($request_data);

        }


        return redirect(route('dashboard.units.index'));
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
        $unit = Unit::find($id);
        $zones = Zone::all();
        $blocks = Block::all();
        return view('dashboard.units.edit', compact('unit', 'zones', 'blocks'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_ar' => 'required|string',


            'price' => 'required|numeric',
            'number_room' => 'required|numeric',
            'units_number' => 'required|numeric',
            'area' => 'required|numeric',

        ]);
        $unit = Unit::find($id);


        $request_data = $request->except('_token', '_method');

        if ($request->zone_id == '0') {

            $request_data['zone_id'] = null;
            $request_data['block_id'] = null;
        }
        $unit->update($request_data);

        return redirect(route('dashboard.units.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $unit = Unit::find($id);
        $unit->delete();

        return back();
    }
}
