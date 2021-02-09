<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title'         => "Dashboard | SIPENPAS",
			'menu_open'     => "Dashboard",
			'menu_active'   => "-",
			'breadCrumb'    => ["Dashboard"],
		];

		return view('pages/dashboard', $data);
	}

	//--------------------------------------------------------------------

	public function profile()
	{
		$data = [
			'title'         => "Profile | SIPENPAS",
			'menu_open'     => "-",
			'menu_active'   => "-",
			'breadCrumb'    => ["Profile"],
		];

		return view('pages/profile', $data);
	}
}
