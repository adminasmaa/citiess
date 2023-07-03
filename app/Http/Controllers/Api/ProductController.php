<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    public function listofProducts()
    {


        $products = Product::get();

        if (count($products)) {


            $products =\App\Http\Resources\Product::collection($products);
            return $this->respondSuccess($products, trans('message.data retrieved successfully.'));

        } else {
            return $this->respondSuccess($products, trans('message.Data not found.'));

        }

    }
    public function detailProducts(Request $request)
    {


        $products = Product::where('id',$request->id)->first();

        if ($products) {


            $products = new \App\Http\Resources\Product($products);
            return $this->respondSuccess($products, trans('message.data retrieved successfully.'));

        } else {
            return $this->respondSuccess($products, trans('message.Data not found.'));

        }

    }


}
