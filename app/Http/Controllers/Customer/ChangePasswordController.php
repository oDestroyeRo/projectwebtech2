<?php

namespace App\Http\Controllers\Customer;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    protected $redirectTo = '/';
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }

    public function index()
    {
        return view('customer.changepassword.index');
    }

    public function update(Request $request,$id)
    {
      $this->validator($request->all())->validate();
        \App\User::where('id', '=', $id)->update([
          'password' => bcrypt($request->password),
          'role' => 'customerfull'
        ]);
      return redirect($this->redirectPath());
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'password' => 'required|min:6|confirmed',
        ]);
    }

}
