<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
	public function dangnhap()
	{
		return view('user.dangnhap');
	}

	public function dangnhapPost(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'password' => 'required',
		]);



		$credentials = $request->only('name', 'password');
		if (Auth::attempt($credentials)) {
			return redirect()->intended(route('trangchu'));
		}
		return redirect(route('dangnhap'))->with("ErrorLogin", "Username or password not correct");
	}

	public function dangky()
	{
		return view('user.dangky');
	}

	public function dangkyPost(Request $request)
	{
		$request->validate([
			'username' => 'required',
			'fullname' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required',
			're_password' => 'required',
			'address' => 'required',
		]);

		$data['name'] = $request->username;
		$data['email'] = $request->email;
		$data['password'] = Hash::make($request->password);
		$user = User::create($data);
		if (!$user) {
			return redirect(route('dangky'))->with("error", "Registration failed, try again");
		}
		return redirect(route('dangnhap'))->with("success", "Registration success, please login");
	}
	public function dangxuat()
	{
		Session::flush();
		Auth::logout();
		return redirect(route('dangnhap'));
	}
}
