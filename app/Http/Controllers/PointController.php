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
class PointController extends BaseController
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('customerfull');
  }
  public function show(){
    $user = Auth::user();
    $id = Auth::id();

    $data = DB::table('user_details')
                ->where('id', '=', $id )
                ->get();
    return view('point', ['data' => $data]);
  }
}
