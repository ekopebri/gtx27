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

    public function login(Request $request)
    {
        $v = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $credentials = array('email' => $request->email, 'password' => $request->password);

            if (Auth::attempt($credentials)) {
                return Redirect::to('admin');
            } else {
                return Redirect::to('admin/login');
            }
        }
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::to('/');
    }

}
