<?php

namespace App\Controllers;

class Antrian extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Nomor Antrian | Penpas Rawat Jalan",
            'breadCrumb'    => "Nomor Antrian"
        ];

        return view('pages/nomor-antrian/main', $data);
    }

    //--------------------------------------------------------------------

}
