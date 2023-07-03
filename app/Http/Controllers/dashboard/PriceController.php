<?php

namespace App\Http\Controllers\dashboard;


use App\DataTables\PricesDataTable;
use App\Models\Block;
use App\Models\Unit;
use App\Models\Zone;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class PriceController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PricesDataTable $dataTable)
    {
        return $dataTable->render('dashboard.prices.index', [
            'title' => trans('site.prices'),
            'model' => 'prices',
            'count' => $dataTable->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $zones = Zone::get();
        return view('dashboard.prices.create', compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // return $request;

        $request->validate([

            'zone_id' => 'required',
            'block_id' => 'required',


        ]);

        $request_data = $request->except('_token', '_method');
        // foreach ($request_data['unit_number'] as $key => $unit) {

        //     $price = Unit::updateOrCreate(['zone_id' => $request->zone_id,'block_id' => $request->block_id],[
        //         'zone_id' => $request->zone_id,
        //         'block_id' => $request->block_id,
        //         'name_en' => $request['unit_number'][$key],
                // 'price' => $request['prices'][$key],

        //     ]);

        // }


          foreach (Unit::where('zone_id','=',$request->zone_id)->where('block_id','=',$request->block_id)->get() as $key => $value) {
                    $unit=Unit::find($value->id);

            $unit->update([
                'zone_id' => $request->zone_id,
                'block_id' => $request->block_id,
                'name_en' => $request['unit_number'][$key],

               'price' => $request['prices'][$key],


            ]);

}
        return redirect(route('dashboard.prices.index'));
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
        return view('dashboard.prices.edit', compact('zones', 'data', 'blocks'));

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


        return redirect(route('dashboard.prices.index'));
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
