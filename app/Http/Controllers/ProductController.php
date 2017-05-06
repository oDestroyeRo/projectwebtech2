<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
      $product = \App\Product::all();
        return view('admin.product.index', [
          'data' => $product
        ]);
    }
    public function create()
    {
        return view('admin.product.create');
    }

    public function edit($id)
    {
      $product = \App\Product::where('product_id', '=', $id)->first();
        return view('admin.product.edit');
    }

}
