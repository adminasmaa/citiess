<?php

namespace App\Http\Controllers\dashboard;


use App\DataTables\ProductsDataTable;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class ProductController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProductsDataTable $table)
    {
        return $table->render('dashboard.products.index', [
            'title' => trans('site.products'),
            'model' => 'products',
            'count' => $table->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('dashboard.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required',

        ]);


        $request_data = $request->except('_token', '_method','image');
        $data=Product::create($request_data);


        if ($request->hasFile('image')) {
           $thumbnail = $request->file('image');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
           Image::make($thumbnail)->resize(100, 100)->save(public_path('images/products'.'/'.$filename));
            $data->image = $filename;
            $data->save();
       }

        return redirect(route('dashboard.products.index'));
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
        $data = Product::find($id);
        $categories=Category::all();
        return view('dashboard.products.edit', compact('data','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = Product::find($id);
        $request->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',

            'price' => 'required|numeric',



        ]);
        $request_data = $request->except('_token', '_method');
        $data->update($request_data);


        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(100, 100)->save(public_path('images/products'.'/'.$filename));
            $data->image = $filename;
            $data->save();
        }
        return redirect(route('dashboard.products.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Product::find($id);
        $data->delete();

        return back();
    }
}
