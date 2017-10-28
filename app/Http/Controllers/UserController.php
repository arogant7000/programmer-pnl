<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Validator;

class UserController extends Controller
{
      public function __construct() {

          $this->middleware('auth');

      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $search = $request->get('search');
         $user =  User::all();
         return view('admin.user.index')->withUser($user);
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin/user/edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|max:255',
          'password'=>'required|between:6,12|confirmed|regex:/^[A-Za-z0-9@!#\$%\^&\*]+$/',
          'role' => 'required',
      ]);

      $user_id =  $request->input('user_id');
      $user = User::find($user_id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->role = $request->role;
      // Change the password
      if ($request->has('password')) {
        $user->password = bcrypt($request->input('password'));
      }

      $notification = array(
	             'message' => 'User Updated!',
	             'alert-type' => 'success'
      );
      $user->save();
      return redirect('admin/user/')->with($notification);


    }

    public function editrole($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin/user/edit-role')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updaterole(Request $request)
    {
      $this->validate($request, [
          'role' => 'required',
      ]);

      $user_id =  $request->input('user_id');
      $user = User::find($user_id);
      $user->role = $request->role;
      $user->save();

      $notification = array(
	             'message' => 'Role Updated!',
	             'alert-type' => 'warning'
      );

      return redirect('admin/user/')->with($notification);

    }

    public function editprofile($id)
    {
      if (Auth::user()->id == $user->id || $request->user()->is_admin()) {
        $user = User::where('id',$id)->first();
        return view('admin/user/edit')->with('user',$user);
      }
      $notification = array(
               'message' => 'Wrong Access!',
               'alert-type' => 'Failed'
      );
      return redirect()->back()->with($notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateprofile(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
      ]);

      $user_id =  $request->input('user_id');
      $user = User::find($user_id);
      $user->name = $request->name;
      $user->email = $request->email;

      $notification = array(
	             'message' => 'Profile Updated!',
	             'alert-type' => 'success'
      );
      $user->save();
      return redirect('admin/user/')->with($notification);


    }

    public function editpassword(Request $request, $id)
    {
        $user = User::where('id',$id)->first();
        if (Auth::user()->id == $user->id || $request->user()->is_admin()) {
          return view('admin/user/change-password')->with('user',$user);
        }
        $notification = array(
  	             'message' => 'Wrong Access!',
  	             'alert-type' => 'Failed'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updatepassword(Request $request)
    {
        $this->validate($request, [
            'old' => 'required',
            'password'=>'required|between:6,12|confirmed|regex:/^[A-Za-z0-9@!#\$%\^&\*]+$/',
        ]);

        $user_id =  $request->input('user_id');
        $user = User::find($user_id);
                $hashedPassword = $user->password;

        if (!Hash::check($request->old, $hashedPassword)) {

          $notification = array(
    	             'message' => 'Password Lama Salah!',
    	             'alert-type' => 'error'
          );
          return redirect()->back()->with($notification);

        } else {
                      //Change the password
                      $user->fill([
                          'password' => Hash::make($request->password),
                      ])->save();

                      $notification = array(
                	             'message' => 'Password Successfully Change!',
                	             'alert-type' => 'success'
                      );
                      return redirect('admin/user/')->with($notification);
        }

        return redirect('admin/index')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $notification = array(
                 'message' => 'User has been Removed!',
                 'alert-type' => 'warning'
        );
        return redirect('admin/user')->with($notification);
    }
}
