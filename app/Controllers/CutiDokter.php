<?php

namespace App\Controllers;

class CutiDokter extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Cuti Dokter | Penpas Rawat Jalan",
            'breadCrumb'    => "Data Masters \ Cuti Dokter"
        ];

        return view('pages/cuti-dokter/main', $data);
    }

    //--------------------------------------------------------------------

}
