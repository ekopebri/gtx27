<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;
use App\User;
use Hash;

class AdminController extends Controller
{
    public function index()
    {
   		return view('admin.index');
    }

    public function user()
    {
   		$user = User::all();
        return view('user.index', compact('user'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
       $v = Validator::make($request->all(), [
            'name' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $password = $request->password;
            $password = Hash::make($password);

            $orang = new User;
            $orang->name = $request->name;
            $orang->email = $request->email;
            $orang->password = $password;
            $orang->save();

            return Redirect::to('admin/user');
        }
    }

    public function show(Request $request, $id)
    {
        $user = User::find($id);
        return view('user.show', compact('user'));
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $v = Validator::make($request->all(), [
            'name' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $password = $request->password;
            $password = Hash::make($password);

            $orang = User::find($request->id);
            $orang->name = $request->name;
            $orang->email = $request->email;
            $orang->password = $password;
            $orang->save();

            return redirect()->action('AdminController@user');
        }
    }

    public function destroy(Request $request, $id)
    {
        User::destroy($request->id);
        
        return redirect()->action('AdminController@user');
    }

    public function login()
    {
        // show the form
        return view('auth/login');
    }

    public function doLogin(Request $request)
    {
        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:6' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('admin/login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {
                Redirect::to('admin');
            } else {        
                // validation not successful, send back to form 
                return Redirect::to('login');

            }
        }
    }

    public function logout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('admin/login');
    }

}
