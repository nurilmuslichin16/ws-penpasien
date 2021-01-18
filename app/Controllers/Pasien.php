<?php

namespace App\Controllers;

class Pasien extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Pasien | Penpas Rawat Jalan",
            'breadCrumb'    => "Pasien"
        ];

        return view('pages/pasien/main', $data);
    }

    //--------------------------------------------------------------------

}
