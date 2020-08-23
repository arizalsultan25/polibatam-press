<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('login');
	}

	public function halaman(){
		$var = "kamu kentang";
		return view('admin/test');
	}
	//--------------------------------------------------------------------


}
