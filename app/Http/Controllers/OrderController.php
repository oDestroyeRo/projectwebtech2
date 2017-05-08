<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderController extends Controller
{
  public function show(){

    $data = DB::table('orders')
                ->where('id', '=','2525' )
                ->get();
    return view('order', ['data' => $data]);
  }

  public function getAllRecord()
  {
    $date = Carbon::now();
    // $date = $date->toDateTimeString();
    $splitDate = explode(' ', $date);
    $ymd = $splitDate[0];
    $orders = DB::table('orders')
    ->select('users.id','products.product_img','products.product_name','products.product_price','order_details.price','product_sizes.size',
    'product_types.type',DB::raw('count(products.product_id) as amount'))
    //-----------
    ->join('users', 'orders.id', '=','users.id')
    //----------
    ->join('order_dates', 'orders.order_id', '=','order_dates.order_id')
    ->join('order_details', 'order_dates.order_id', '=','order_details.order_id')
    //-------------
    ->join('product_sizes', 'order_details.size', '=','product_sizes.size')
    ->join('product_types', 'order_details.type', '=','product_types.type')
    //-------------
    ->join('products', 'order_details.product_id', '=','products.product_id')
    // ->where('order_dates.date', '=', $ymd)
    ->groupBy('users.id','products.product_img','products.product_name','products.product_price','order_details.price','product_sizes.size','product_types.type')
    ->paginate(3);
    // View::make('admin.report',['reports' => $reports])->render();
    return view('admin.ad_order',['orders' => $orders,'type' => 'all']);
  }


  public function findByID($id)
  {
    $orders = DB::table('orders')
    ->select('products.product_img','products.product_name','products.product_price','order_details.price','product_sizes.size',
    'product_types.type',DB::raw('count(products.product_id) as amount'))
    ->join('order_dates', 'orders.order_id', '=','order_dates.order_id')
    ->join('order_details', 'order_dates.order_id', '=','order_details.order_id')
    //
    ->join('product_sizes', 'order_details.size', '=','product_sizes.size')
    ->join('product_types', 'order_details.type', '=','product_types.type')
    //
    ->join('products', 'order_details.product_id', '=','products.product_id')
    ->where('orders.order_id', '=', $id)
    ->groupBy('products.product_img','products.product_name','products.product_price','order_details.price','product_sizes.size','product_types.type')
    ->paginate(3);
    // View::make('admin.report',['reports' => $reports])->render();
    return view('admin.ad_order',['orders' => $orders,'type' => 'one']);
  }
}
?>
