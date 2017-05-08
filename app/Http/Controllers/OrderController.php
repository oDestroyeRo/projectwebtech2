<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends BaseController
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('customerfull');
  }
    //
  public function show(){
    $user = Auth::user();
    $id = Auth::id();
   $data = DB::table('orders')
            ->join('order_details', 'orders.order_id', '=', 'order_details.order_id')
            ->join('products', 'products.product_id', '=', 'order_details.product_id')
            ->select('orders.id', 'order_details.*', 'products.product_name')
            ->where('orders.id', '=',$id)
            ->get();
    return view('order', ['data' => $data]);
  }
}
?>
