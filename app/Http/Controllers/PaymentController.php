<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class PaymentController extends Controller
{
	public function thanhtoan(){
		return view('user.thanhtoan');
	}
	public function thanhtoanPost(Request $request)
    {
        $request->validate([
    	    'fullname' => 'required',
	    'email' => 'required|email|unique:users',
	    'phone' => 'required|numeric',
	    'address' => 'required',
	    'notes' => 'nullable',
	    'method' => ''
    	]);
	$data['fullname'] = $request->fullname;
	$data['email'] = $request->email;
	$data['phone'] = $request->phone;
	$data['address'] = $request->address;
	$data['note'] = $request->notes;
	$data['method']= $request->method;
	$order = new Order();
	$orderDetail = $order->saveOrder($data);
        if(!$orderDetail){
	     return redirect()->route('thanhtoan')->withInput()->withErrors(['error'=>'Payment failed']);
	}else{
	     return redirect()->intended(route('trangchu'));
	}
    }
}