<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('layout/header');
		echo view('layout/menu');
		echo view('home/index');
		echo view('layout/footer');
	}
}
