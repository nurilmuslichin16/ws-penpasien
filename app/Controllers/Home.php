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

}
