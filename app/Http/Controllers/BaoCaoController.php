<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaoCaoController extends Controller
{
    public function getDanhSach()
    {
    	return view('admin.baocao.danhsach');
    }

    public function getThem()
	{
		return view('admin.baocao.sua');
	}

	public function getSua()
	{
		return view('admin.baocao.them');
	}
}
