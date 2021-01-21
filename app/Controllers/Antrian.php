<?php

namespace App\Controllers;

class Antrian extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Nomor Antrian | SIPENPAS",
            'breadCrumb'    => "Pendaftaran \ Nomor Antrian"
        ];

        return view('pages/nomor-antrian/main', $data);
    }

    //--------------------------------------------------------------------

}
