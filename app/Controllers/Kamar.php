<?php

namespace App\Controllers;

class Kamar extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Kamar | Penpas Rawat Jalan",
            'breadCrumb'    => "Kamar"
        ];

        return view('pages/kamar/main', $data);
    }

    //--------------------------------------------------------------------

}
