<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimKiemThongTinController extends Controller
{
    public function getDanhSach()
    {
    	return view('admin.timkiemthongtin.danhsach');
    }

    public function getThem()
    {
    	return view('admin.timkiemthongtin.them');
    }

    public function getSua()
    {
    	return view('admin.timkiemthongtin.sua');
    }
}
