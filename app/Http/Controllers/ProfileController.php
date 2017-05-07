<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class ProfileController extends BaseController
{
    //
  public function show(){

    $data = DB::table('users')
                ->where('id', '=','2525' )
                ->get();
    return view('profile', ['data' => $data]);
  }
  public function update(){
    echo 'dewid';
    DB::table('users')
            ->where('id', '2525')
            ->update(['firstname' => 'test']);
  }
}
?>
