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

class ProfileController extends BaseController
{
    //
  public function show(){
    $user = Auth::user();
    $id = Auth::id();

    $data = DB::table('users')
                ->where('id', '=', $id )
                ->get();
    return view('profile', ['data' => $data]);
  }
  public function update(request $request,$id){
    DB::table('users')
            ->where('id', '=', $id)
            ->update(['firstname' => $request->input('firstname'),
                      'lastname' => $request->input('lastname'),
                      'tel' => $request->input('tel'),
                      'address' => $request->input('address'),
                      'password' =>bcrypt($request->input('pass'))
          ]);
          $data = DB::table('users')
                      ->where('id', '=', $id )
                      ->get();
          return view('profile',[
            'data' => $data
          ]);
    // return redirect()->to('/customer/profile/{id}');
  }
}
?>
