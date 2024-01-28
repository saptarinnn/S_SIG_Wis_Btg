<?php
namespace App\Controllers;
use App\models\UsersModel;

class login extends BaseController
{	
	public function index()
	{		
		return view('login');	
	}

	public function process()
	{	
		$users = new UsersModel();
		$id = $this->request->getVar('id');
		$password = $this->request->getVar('password');
		$dataUser = $users->where([
			'id' => $id,
		])->first();
		if ($dataUser) {
				session()->set([
			 	'id' => $dataUser->id,
			 	'password' => $dataUser->password,
				'logged_in' => TRUE,
				 ]);
				return redirect()->to(base_url('admin'));			
			} else {
				session()->setFlashdata('error', 'ID atau password yang anda masukkan salah', 'Password Salah');
				return redirect ()->to(base_url('login'));
				}	
	}
			
	function logout()
	{	session()->destroy();
		return redirect()->to(base_url('/login'));	}}