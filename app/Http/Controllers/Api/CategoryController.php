<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

    public function listofCategories()
    {


        $categories = Category::get();

        if (count($categories)) {


            $categories = \App\Http\Resources\Category::collection($categories);
            return $this->respondSuccess($categories, trans('message.categories retrieved successfully.'));

        } else {
            return $this->respondSuccess($categories, trans('message.Category not found.'));

        }

    }


}
