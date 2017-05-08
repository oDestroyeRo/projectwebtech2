<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Carbon\Carbon;

class ReportController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('admin');
  }

  public function findByCurDate()
  {
    $reports = DB::table('orders')
    ->select('products.product_name','products.product_price','order_details.price','product_sizes.size',
    'product_types.type',DB::raw('count(products.product_id) as amount'))
    ->join('order_dates', 'orders.order_id', '=','order_dates.order_id')
    ->join('order_details', 'order_dates.order_id', '=','order_details.order_id')
    //
    ->join('product_sizes', 'order_details.size', '=','product_sizes.size')
    ->join('product_types', 'order_details.type', '=','product_types.type')
    //
    ->join('products', 'order_details.product_id', '=','products.product_id')
    ->where('order_dates.date', '=', '2017-05-07')
    ->groupBy('products.product_name','products.product_price','order_details.price','product_sizes.size','product_types.type')
    ->get();
    return view('admin.report',['reports' => $reports]);
  }


  public function findByDate($date)
  {
    $reports = DB::table('orders')
    ->select('products.product_name','products.product_price','order_details.price','product_sizes.size',
    'product_types.type',DB::raw('count(products.product_id) as amount'))
    ->join('order_dates', 'orders.order_id', '=','order_dates.order_id')
    ->join('order_details', 'order_dates.order_id', '=','order_details.order_id')
    //
    ->join('product_sizes', 'order_details.size', '=','product_sizes.size')
    ->join('product_types', 'order_details.type', '=','product_types.type')
    //
    ->join('products', 'order_details.product_id', '=','products.product_id')
    ->where('order_dates.date', '=', $date)
    ->groupBy('products.product_name','products.product_price','order_details.price','product_sizes.size','product_types.type')
    ->get();
    // View::make('admin.report',['reports' => $reports])->render();
    return view('admin.report',['reports' => $reports]);
  }
}
