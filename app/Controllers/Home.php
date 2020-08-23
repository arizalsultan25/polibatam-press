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

	public function login(){
		if(isset($_POST['username']) && isset($_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];

			return view('test', ['username' => $username, 'password' => $password]);
		}else{
			$this->index();
		}
	}

}
