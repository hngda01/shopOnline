<?php 

namespace App\Http\Controllers;
use App\TheLoai;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TheLoaiController extends Controller
{
    public function getDanhSach(){
        if(Auth::check()){
            $theloai= TheLoai::all();
            $name='Hai';
            return view('admin.theloai.danhsach',['theloai'=>$theloai,'name'=>$name]);
        }
        else return view('admin.login');
    }
    public function getThem(){
    	return view('admin.theloai.them');
    }
    public function getSua($id){
    	$theloai= TheLoai::find($id);
        return view('admin.theloai.sua',['theloai'=>$theloai]);
    }
    public function postSua(Request $request,$id){
        $theloai= Theloai::find($id);
        $this->validate($request,[
            'Ten'=>'required|min:3'
            ],[
            'Ten.required'=>'name is required',
            'Ten.min'=>'min length: 2'
            ]);
        $theloai->Ten= $request->Ten;
        $theloai->TenKhongDau= changeTitle($request->Ten);
        $theloai->save();

        return redirect('admin/theloai/sua/'.$id)->with('thong bao','da sua thanh cong');
    }
    public function postThem(Request $request){
        $this->validate($request,[
            'Ten'=>'required|min:3|max:100'
            ],[
            'Ten.required'=>'ban chua nhap ten',
            'Ten.min'=>'min length: 3',
            'Ten.max'=>'max length: 100'
            ]);
        $theloai= new TheLoai;
        $theloai->Ten= $request->Ten;
        $theloai->TenKhongDau= changeTitle($request->Ten);
        $theloai->save();
        return redirect('admin/theloai/them')->with('thong bao','da them the loai');
    }
}
