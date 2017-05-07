<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
      public function update($id, UserFormRequest $request)
    {

      $user = User::findOrFail($id);

      $user->name = $request->get('name');

      $user->email = $request->get('email');

      $user->save();

      return \Redirect::route('users.edit', [$user->id])->with('message', 'User has been updated!');

    }

    //     public function rules()
    // {
    //     return [
    //       'name' => 'required',
    //       'email' => 'unique:users|email|required',
    //     ];
    // }

          public function rules()
      {
          // Grab the user id from the URL
          $user_id = \Route::current()->getParameter('users');

          return [
            'name' => 'required',
            'email' => 'unique:users,email,'.$user_id.'|email|required',
          ];
      }
}
