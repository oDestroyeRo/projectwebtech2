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

    public function allRecord(){
      $promotions = DB::table('promotions')->paginate(1);
      return view('admin.promotion.index',['promotions' => $promotions]);
    }


    public function insert(Request $request)
  {
    $filename = $request->file('promotionImg')->getClientOriginalName();

    $promotions = new Promotion([
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
    Promotion::where('promotion_id', '=', $id)->delete();
    return 'delete'.' '.$id;
  }
}
