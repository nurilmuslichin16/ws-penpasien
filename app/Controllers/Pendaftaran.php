<?php

namespace App\Controllers;

class Pendaftaran extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Rawat Jalan | Penpas Rawat Jalan",
            'breadCrumb'    => "Pendaftaran \ Rawat Jalan"
        ];

        return view('pages/rawat-jalan/main', $data);
    }

    public function rawatInap()
    {
        $data = [
            'title'         => "Rawat Inap | Penpas Rawat Jalan",
            'breadCrumb'    => "Pendaftaran \ Rawat Inap"
        ];

        return view('pages/rawat-inap/main', $data);
    }

    //--------------------------------------------------------------------

}
