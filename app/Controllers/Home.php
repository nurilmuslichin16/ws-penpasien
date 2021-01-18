<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' 		=> "Dashboard | Penpas Rawat Jalan",
			'breadCrumb' 	=> "Dashboard"
		];

		return view('pages/dashboard', $data);
	}

	//--------------------------------------------------------------------

}
