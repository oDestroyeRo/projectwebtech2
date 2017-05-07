<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
// use App\Products;
use Illuminate\Support\Facades\DB;
use App\Promotion;
use File;
use App\Order;

class PromotionController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'promotionDis' => 'required|digits_between:2,5',
        ]);
    }

    public function show(){
      // $obj = Products::first();
      // $data['obj'] = $obj;
      // return view('menu',[
      //   'data' => $data
      // ]);

      $promotion = DB::table('promotions')->get();
      return view('promotion', ['promotion' => $promotion]);
    }

    public function allRecord(){
      $promotions = DB::table('promotions')->paginate(1);
      return view('admin.promotion.index',['promotions' => $promotions]);
    }


    public function insert(Request $request)
  {
    $this->validate($request,[
      'promotionDis' => 'required|digits_between:2,5',
      'promotionDes' => 'required|max:255'
      // 'promotionImg' => 'required|image|mimes:jpeg,png,jpg,gif'
    ]);

    $promotion_id = Promotion::max('promotion_id');
    $promotion_id += 1 ;

    $filename = $request->file('promotionImg')->getClientOriginalName();

    $promotions = new Promotion([
      'promotion_id' => $promotion_id,
      'promotion_img' => 'img/'.''.$filename,
      'description' => $request->promotionDes,
      'discount' => $request->promotionDis
    ]);
    $promotions -> save();

    $request->promotionImg->move(public_path('img'), $filename);

    $promotions = DB::table('promotions')->paginate(2);
    return view('admin.promotion.index',['promotions' => $promotions]);
  }


  public function edit($id)
  {
    return 'edit'.' '.$id;
  }


  public function delete($id)
  {
    $filename = Promotion::where('promotion_id', '=', $id);
    File::delete($filename->first()->promotion_img);
    $filename->delete();
    return 'delete'.' '.$id;
  }

  // public function report()
  // {
  //   $reports = DB::table('orders')->join('order_dates', 'orders.order_id', '=','order_dates.order_id')
  //   ->join('order_details', 'order_dates.order_id', '=','order_details.order_id')
  //   ->join('products', 'order_details.order_id', '=','products.product_id')->get();
  //   return view('admin.report',['reports' => $reports]);
  // }


  public function report()
  {
    $reports = DB::table('orders')
    ->select('products.product_id','products.product_name','products.product_price',DB::raw('count(products.product_id) as amount'))
    ->join('order_dates', 'orders.order_id', '=','order_dates.order_id')
    ->join('order_details', 'order_dates.order_id', '=','order_details.order_id')
    ->join('products', 'order_details.product_id', '=','products.product_id')
    ->where('order_dates.date', '=', '2016-05-7')
    ->groupBy('products.product_id','products.product_name','products.product_price')
    ->get();
    return view('admin.report',['reports' => $reports]);
  }

  // public function report()
  // {
  //   $reports = DB::table('orders')
  //   ->select('products.*')
  //   ->join('order_dates', 'orders.order_id', '=','order_dates.order_id')
  //   ->join('order_details', 'order_dates.order_id', '=','order_details.order_id')
  //   ->join('products', 'order_details.product_id', '=','products.product_id')
  //   ->where('order_dates.date', '=', '2016-05-7')
  //   ->groupBy('products.product_id','products.product_name','products.product_price')
  //   ->get();
  //   return view('admin.report',['reports' => $reports]);
  //
  // }

  public function test()
  {
    return view('welcom');
  }











}
