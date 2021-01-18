<?php

namespace App\Controllers;

class JadwalDokter extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Jadwal Dokter | Penpas Rawat Jalan",
            'breadCrumb'    => "Jadwal Dokter"
        ];

        return view('pages/jadwal-dokter/main', $data);
    }

    //--------------------------------------------------------------------

}
