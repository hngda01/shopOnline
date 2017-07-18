<?php

namespace App\Http\Controllers;
use App\TheLoai;

use Illuminate\Http\Request;

class TheLoaiController extends Controller
{
    public function getDanhSach(){
    	$theloai= TheLoai::all();
    	$name='Hai';
    	return view('admin.theloai.danhsach',['theloai'=>$theloai,'name'=>$name]);
    }
    public function getThem(){
    	return view('admin.theloai.them');
    }
    public function getSua(){
    	return view('admin.theloai.sua');
    }
}
