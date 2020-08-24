<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('login_copy');
	}

	public function halaman(){
		$var = "kamu kentang";
		return view('admin/test');
	}
	//--------------------------------------------------------------------

	public function login(){
		if(isset($_POST['email']) && isset($_POST['password'])){
			session_start();
			$username = $_POST['email'];
			$password = $_POST['password'];
			$_SESSION['email'] = $username;

			return view('admin/index', ['username' => $email, 'password' => $password]);
		}else{
			$this->index();
		}
	}

	public function register(){
		return view('register');
	}

}
