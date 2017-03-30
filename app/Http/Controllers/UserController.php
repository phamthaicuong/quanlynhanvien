<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getDanhSach()
    {
    	return view('admin.user.danhsach');
    }

    public function getThem()
	{
		return view('admin.user.sua');
	}

	public function getSua()
	{
		return view('admin.user.them');
	}

	public function getDangNhapAdmin()
	{
		return view('admin.login');
	}

	public function postDangNhapAdmin(Request $request)
	{
		$this->validate($request,[
			'email'=>'required',
			'password'=>'required|min:3|max:32'
			],[
			'email.required'=>'Ban chua nhap Email',
			'password.required'=>'Ban chua nhap Password',
			'password.min'=>'Khong duoc nho hon 3 ky tu',
			'password.max'=>'Khong duoc lon hon 32 ky tu'
			]);
		if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
		{
			return redirect('admin/quanlyhoso/danhsach');
		}
		else
		{
			return redirect('admin/dangnhap')->with('thongbao','Dang nhap khong thanh cong');
		}
	}
}
