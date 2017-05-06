<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{

  protected $redirectTo = '/home';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('guest');
  }
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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            //'password' => 'required|min:6|confirmed',
            // 'address' => 'required|max:255',
            'tel' => 'required|digits:10',
        ]);
    }

}
