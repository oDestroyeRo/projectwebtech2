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
use Illuminate\Support\Facades\Validator;

class ProfileController extends BaseController
{
  protected $redirectTo = '/customer/profile';
  public function redirectPath()
  {
      if (method_exists($this, 'redirectTo')) {
          return $this->redirectTo();
      }

      return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
  }
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

    if($request->password == ''){
      $this->validator($request->all())->validate();
      DB::table('users')
              ->where('id', '=', $id)
              ->update(['firstname' => $request->input('firstname'),
                        'lastname' => $request->input('lastname'),
                        'email' => $request->input('email'),
                        'tel' => $request->input('tel'),
                        'address' => $request->input('address'),
            ]);
            $data = DB::table('users')
                        ->where('id', '=', $id )
                        ->get();

    }
    else{
      $this->validator2($request->all())->validate();
      DB::table('users')
              ->where('id', '=', $id)
              ->update(['firstname' => $request->input('firstname'),
                        'lastname' => $request->input('lastname'),
                        'email' => $request->input('email'),
                        'tel' => $request->input('tel'),
                        'address' => $request->input('address'),
                        'password' =>bcrypt($request->input('password'))
            ]);
            $data = DB::table('users')
                        ->where('id', '=', $id )
                        ->get();

    }
    return redirect($this->redirectPath());
  }


  protected function validator(array $data)
  {
      return Validator::make($data, [
          'firstname' => 'required|max:255',
          'lastname' => 'required|max:255',
          'tel' => 'required|digits:10',
          'email' => 'required|email|max:255',
          'address' => 'required|max:255',
          'password' => 'confirmed',
      ]);
  }
  protected function validator2(array $data)
  {
      return Validator::make($data, [
          'firstname' => 'required|max:255',
          'lastname' => 'required|max:255',
          'tel' => 'required|digits:10',
          'email' => 'required|email|max:255',
          'address' => 'required|max:255',
          'password' => 'required|min:6|confirmed',
      ]);
  }
}
?>
