<?php

namespace App\Controllers;

class Pendaftaran extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Pendaftaran | Penpas Rawat Jalan",
            'breadCrumb'    => "Pendaftaran"
        ];

        return view('pages/pendaftaran/main', $data);
    }

    //--------------------------------------------------------------------

}
