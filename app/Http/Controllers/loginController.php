<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class loginController extends Controller
{
    public function getLogin(){
    	return view('admin.login');
    }
    public function postLogin(Request $request){
    	$this->validate($request,[
    		'email'=>'required',
    		'password'=>'required'
    		],[
    		'email.required'=>'ban chua nhap email',
    		'password.required'=>'ban chua nhap mat khau'
    		]);
    	if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
    		return redirect('admin/theloai/danhsach');
    	}
    	else {
    		return redirect('login')->with('thong bao','dang nhap khong thanh cong');
    	}
    }
    public function getLogout(){
        Auth::logout();
        return redirect('login');
    }
}
