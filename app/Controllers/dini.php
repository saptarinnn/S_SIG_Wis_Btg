<?php

namespace App\Controllers;

class dini extends BaseController
{
	public function welcome()
	{
		return view('welcome');
	}
	public function login()
	{
		return view('login');
	}
    public function regis()
	{
		return view('regis');
	}
	public function home()
	{
		return view('home');
	}
    public function bontang()
	{
		return view('bontang');
	}
	public function maps()
	{
		return view('maps');
	}
	public function alam()
	{
		return view('alam');
	}
	public function form()
	{
		return view('form');
	}
	public function gambarindex()
	{
		return view('gambarindex');
	}
	

}
