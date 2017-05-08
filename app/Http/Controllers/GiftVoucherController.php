<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class GiftVoucherController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('customerfull');
  }
  public function show(){

    $voucher = DB::table('vouchers')->get();
    return view('giftvoucher', ['voucher' => $voucher]);
  }

}
