<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CategoriesDataTable;
use App\Models\Category;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class CategoryController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoriesDataTable $table)
    {
        return $table->render('dashboard.categories.index', [
            'title' => trans('site.categories'),
            'model' => 'categories',
            'count' => $table->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',

            'image' => 'required',

        ]);


        $request_data = $request->except('_token', '_method','image');
        $data=Category::create($request_data);


        if ($request->hasFile('image')) {
           $thumbnail = $request->file('image');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
           Image::make($thumbnail)->resize(100, 100)->save(public_path('images/categories'.'/'.$filename));
            $data->image = $filename;
            $data->save();
       }

        return redirect(route('dashboard.categories.index'));
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
        $data = Category::find($id);

        return view('dashboard.categories.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = Category::find($id);
        $request->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',



        ]);
        $request_data = $request->except('_token', '_method');
        $data->update($request_data);


        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(100, 100)->save(public_path('images/categories'.'/'.$filename));
            $data->image = $filename;
            $data->save();
        }
        return redirect(route('dashboard.categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Category::find($id);
        $data->delete();

        return back();
    }
}
