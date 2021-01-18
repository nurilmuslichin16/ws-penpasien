<?php

namespace App\Controllers;

class Dokter extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Dokter | Penpas Rawat Jalan",
            'breadCrumb'    => "Dokter"
        ];

        return view('pages/dokter/main', $data);
    }

    //--------------------------------------------------------------------

}
