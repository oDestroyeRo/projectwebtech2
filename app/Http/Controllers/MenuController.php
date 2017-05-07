<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\DB;

class MenuController extends BaseController
{
    //
  public function show(){
    $data = DB::table('products')->get();
    return view('menu', ['data' => $data]);
  }

}
?>
