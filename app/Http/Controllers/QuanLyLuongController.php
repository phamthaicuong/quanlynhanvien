<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuanLyLuongController extends Controller
{
    public function getDanhSach()
    {
    	return view('admin.quanlyluong.danhsach');
    }

    public function getThem()
    {
    	return view('admin.quanlyluong.them');
    }

    public function getSua()
    {
    	return view('admin.quanlyluong.sua');
    }
}
