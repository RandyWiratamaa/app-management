<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $res = Http::get('product-management.dev.com/api/product-categories');
        $jsonData = $res->json();
        return view('product-management.product-category.index', get_defined_vars());
    }
    public function addForm()
    {
        return view('product-management.product-category.add-form', get_defined_vars());
    }

    public function store(Request $request)
    {
        $res = Http::post('product-management.dev.com/api/product-category', [
            'name' => $request->name,
            'description' => $request->description,
        ]);
        $jsonData = $res->json();
        return redirect()->route('product-category.index');
    }
}
