<?php

namespace App\Http\Controllers\dashboard;


use App\DataTables\UnitStatusDataTable;
use App\Models\Block;
use App\Models\Price;
use App\Models\Unit;
use App\Models\Zone;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class UnitStatusController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UnitStatusDataTable $dataTable)
    {
        return $dataTable->render('dashboard.unitstatus.index', [
            'title' => trans('site.unitstatus'),
            'model' => 'unitstatus',
            'count' => $dataTable->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $zones = Zone::get();
        return view('dashboard.unitstatus.create', compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'zone_id' => 'required',
            'block_id' => 'required',


        ]);

        $request_data = $request->except('_token', '_method');


        // foreach ($request_data['unit_number'] as $key => $unit) {

        //     $price = Unit::updateOrCreate(['zone_id' => $request->zone_id,'block_id' => $request->block_id],[
        //         'zone_id' => $request->zone_id,
        //         'block_id' => $request->block_id,
        //         'name_en' => $unit,

        //         'status' => $request['status'][$key],

        //     ]);

        // }
        
                foreach (Unit::where('zone_id','=',$request->zone_id)->where('block_id','=',$request->block_id)->get() as $key => $value) {
                    $unit=Unit::find($value->id);

            $unit->update([
                'zone_id' => $request->zone_id,
                'block_id' => $request->block_id,
                'name_en' => $request['unit_number'][$key],

                'status' => $request['status'][$key],

            ]);

        }
        return redirect(route('dashboard.unitstatus.index'));
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Unit::find($id);

        $zones = Zone::get();
        $blocks = Block::get();
        return view('dashboard.unitstatus.edit', compact('zones', 'data', 'blocks'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Unit::find($id);

        $request->validate([

            'zone_id' => 'required',
            'block_id' => 'required',


        ]);


        $request_data = $request->except('_token', '_method');

        $data->update($request_data);


        return redirect(route('dashboard.unitstatus.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Unit::find($id);
        $data->delete();

        return back();
    }
}
