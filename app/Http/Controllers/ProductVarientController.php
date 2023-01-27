<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductVarientController extends Controller
{
    public function index()
    {
        $varient = Http::get('product-management.dev.com/api/product-varients');
        $varientJson = $varient->json();
        $varient_value = Http::get('product-management.dev.com/api/product-varient-values');
        $varientValueJson = $varient_value->json();
        return view('product-management.product-varient.index', get_defined_vars());
    }
    public function addVarient()
    {
        return view('product-management.product-varient.add-form', get_defined_vars());
    }

    public function store(Request $request)
    {
        $res = Http::post('product-management.dev.com/api/product-varient', [
            'name' => $request->name,
            'description' => $request->description,
        ]);
        $jsonData = $res->json();
        return redirect()->route('product-varient.index');
    }
}
