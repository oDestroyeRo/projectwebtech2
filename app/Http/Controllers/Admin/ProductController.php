<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    protected $redirectTo = '/product';
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $product = \App\Product::all();
        return view('admin.product.index', [
          'data' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validator($request->all())->validate();

      $filename = \App\product::max('product_id')+1;
      $fullfilename = $filename.'.png';

      $request->image = $request->file('image');
      $request->image->move(public_path('img'), $fullfilename);

      Product::create([
          'product_id' => \App\product::max('product_id')+1,
          'product_name' => $request->name,
          'product_price' => $request->price,
          'product_img' =>  'img/'.$fullfilename
      ]);



      return redirect($this->redirectPath());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = \App\Product::where('product_id', '=', $id)->first();

      return view('admin.product.edit', [
        'data' => $product
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $this->validator2($request->all())->validate();
        \App\Product::where('product_id', '=', $id)->update([
          'product_price' => $request->price
        ]);
      // else{
      //   $product2 = \App\Product::where('product_id', '=', $product->product_id)->update([
      //     'product_name' => $request->name,
      //     'product_price' => $request->price,
      //     'product_img' => $request->image_edit,
      //
      //   ]);
      //
      // }

      return redirect($this->redirectPath());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = \App\Product::where('product_id', '=', $id)->first();
      $image = $product->product_img;
      unlink($image);
      $product = \App\Product::where('product_id', '=', $id)->delete();

      return redirect($this->redirectPath());
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'image' => 'required|image',
            'price' => 'required|numeric'
        ]);
    }
    protected function validator2(array $data)
    {
        return Validator::make($data, [
            'price' => 'required|numeric'
        ]);
    }
}
