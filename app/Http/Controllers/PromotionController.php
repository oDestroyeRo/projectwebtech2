<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
// use App\Products;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    public function show(){
      // $obj = Products::first();
      // $data['obj'] = $obj;
      // return view('menu',[
      //   'data' => $data
      // ]);

      $promotion = DB::table('promotions')->get();
      return view('promotion', ['promotion' => $promotion]);
    }
}
