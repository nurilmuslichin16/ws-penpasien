<?php

namespace App\Controllers;

class JadwalDokter extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Jadwal Dokter | Penpas Rawat Jalan",
            'breadCrumb'    => "Data Masters \ Jadwal Dokter"
        ];

        return view('pages/jadwal-dokter/main', $data);
    }

    public function detail()
    {
        $data = [
            'title'         => "Detail | Jadwal Dokter",
            'breadCrumb'    => "Data Masters \ Jadwal Dokter \ Detail"
        ];

        return view('pages/jadwal-dokter/detail', $data);
    }

    //--------------------------------------------------------------------

}
