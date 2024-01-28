<?php

namespace App\Controllers;

class wisata extends BaseController
{
	public function alam()
	{
		return view('alam');
	}
	public function budaya()
	{
		return view('budaya');
	}
    public function religi()
	{
		return view('religi');
	}
    public function buatan()
	{
		return view('buatan');
	}
    public function kuliner()
	{
		return view('kuliner');
	}
    public function belanja()
	{
		return view('belanja');
	}
}
