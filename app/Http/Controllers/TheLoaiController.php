<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Theloai;

class TheLoaiController extends Controller
{
	public function getDanhSach()
	{
		$theloai = Theloai::all();
		return view('admin.theloai.danhsach',['theloai'=>$theloai]);
	}

	public function getThem()
	{
		return view('admin.theloai.sua');
	}

	public function getSua()
	{
		return view('admin.theloai.them');
	}
}
