<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Luong;

class LuongController extends Controller
{
    public function getDanhSach()
    {
        $luong = Luong::all();
        return view('admin.luong.danhsach',['luong'=>$luong]);
    }

    public function getThem()
    {
    	return view('admin.luong.them');
    }

    public function postThem()
    {
        $this->validate($request,[
                'PhuCap' => 'required'

            ],[
                'PhuCap.required' => 'Ban chua nhap noi dung nay'

            ]);
        $luong = new Luong;
        $luong->PhuCap = $request->PhuCap;
        $luong->BacLuong = $request->BacLuong;
        $luong->save();

        return redirect('admin/luong/them')->with('thongbao','Them thanh cong');
    }

    public function getSua()
    {
    	return view('admin.luong.sua');
    }
}
