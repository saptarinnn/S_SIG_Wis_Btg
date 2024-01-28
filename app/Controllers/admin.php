<?php

namespace App\Controllers;

class admin extends BaseController
{
	public function admin()
	{
		return view('admin');
	}
	public function foto()
	{
		return view('foto');
	}
}