<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\BlocksDataTable;
use App\Models\Block;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class BlockController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BlocksDataTable $blocksDataTable)
    {
        return $blocksDataTable->render('dashboard.blocks.index', [
            'title' => trans('site.blocks'),
            'model' => 'blocks',
            'count' => $blocksDataTable->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zones=Zone::all();
        return view('dashboard.blocks.create',compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string',

            'units_number' => 'required|numeric',


        ]);
        $request_data = $request->except('_token', '_method');
        Block::create($request_data);

        return redirect(route('dashboard.blocks.index'));
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
        $block= Block::find($id);
        $zones=Zone::all();
        return view('dashboard.blocks.edit', compact('block','zones'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_ar' => 'required|string',

            'units_number' => 'required|numeric',


        ]);
        $block= Block::find($id);

        $request_data = $request->except('_token', '_method');
        $block->update($request_data);

        return redirect(route('dashboard.blocks.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $block= Block::find($id);
        $block->delete();

        return back();
    }
}
