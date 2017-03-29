<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app;

class TheLoaiController extends Controller
{
	public function getDanhSach()
	{
		return view('admin.theloai.danhsach');
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
