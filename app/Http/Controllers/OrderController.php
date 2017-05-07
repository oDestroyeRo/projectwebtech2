<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
  public function show(){

    $data = DB::table('orders')
                ->where('user_id', '=','2525' )
                ->get();
    return view('order', ['data' => $data]);
  }
}
?>
