<?php

namespace App\Http\Controllers\Admin;

use App\ProductSize;
use App\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductDetailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    protected $redirectTo = '/productdetail';
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
      $productsize = \App\ProductSize::all();
      $producttype = \App\ProductType::all();
        return view('admin.productdetail.index', [
          'productsize' => $productsize,
          'producttype' => $producttype,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createsize()
    {
        return view('admin.productdetail.createsize');
    }

    public function createtype()
    {
        return view('admin.productdetail.createtype');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storesize(Request $request)
    {
      $this->validator($request->all())->validate();


      ProductSize::create([
          'size' => $request->name,
          'size_price' => $request->price,
      ]);



      return redirect($this->redirectPath());
    }



    public function storetype(Request $request)
    {
      $this->validator($request->all())->validate();


      ProductType::create([
          'type' => $request->name,
          'type_price' => $request->price,
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
    public function editsize($id)
    {
      $productsize = \App\ProductSize::where('size', '=', $id)->first();

      return view('admin.productdetail.editsize', [
        'data' => $productsize
      ]);
    }
    public function edittype($id)
    {
      $producttype = \App\ProductType::where('type', '=', $id)->first();

      return view('admin.productdetail.edittype', [
        'data' => $producttype
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function updatesize(Request $request,$id)
    {
      $this->validator2($request->all())->validate();
        \App\ProductSize::where('size', '=', $id)->update([
          'size_price' => $request->price
        ]);

      return redirect($this->redirectPath());
    }

    public function updatetype(Request $request,$id)
    {
      $this->validator2($request->all())->validate();
        \App\ProductType::where('type', '=', $id)->update([
          'type_price' => $request->price
        ]);

      return redirect($this->redirectPath());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroysize($id)
    {
      $product = \App\ProductSize::where('size', '=', $id)->delete();

      return redirect($this->redirectPath());
    }

    public function destroytype($id)
    {
      $product = \App\ProductType::where('type', '=', $id)->delete();

      return redirect($this->redirectPath());
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
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
