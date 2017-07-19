<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LoaiTin;
use App\TheLoai;

class danhsachController extends Controller
{
    public function getDanhSach(){
    	$loaitin= LoaiTin::all();
    	return view('admin.loaitin.danhsach',['loaitin'=>$loaitin]);
    }
    public function getThem(){
    	$theloai= TheLoai::all();
    	return view('admin.loaitin.them',['theloai'=>$theloai]);
    }
    public function postThem(Request $request){
    	$loaitin= new LoaiTin;
    	$loaitin->idTheLoai=$request->idTheLoai_;
    	$loaitin->Ten= $request->Ten;
    	$loaitin->TenKhongDau= changeTitle($request->Ten);
    	$loaitin->save();
    	return redirect('admin/loaitin/them')->with('thong bao','da them thanh cong');
    }
}

