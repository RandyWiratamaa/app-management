<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductSubCategoryController extends Controller
{
    public function index()
    {
        $product_sub_categories = Http::get('product-management.dev.com/api/product-sub-categories');
        $jsonData = $product_sub_categories->json();
        return view('product-management.product-sub-category.index', get_defined_vars());
    }

    public function addForm()
    {
        $product_category = Http::get('product-management.dev.com/api/product-categories');
        $product_category_json = $product_category->json();
        return view('product-management.product-sub-category.add-form', get_defined_vars());
    }

    public function store(Request $request)
    {
        $res = Http::post('product-management.dev.com/api/product-sub-category',[
            'name' => $request->name,
            'product_category_id' => $request->product_category,
            'description' => $request->description,
        ]);
        $jsonData = $res->json();
        return redirect()->route('product-sub-category.index');
    }
}
