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
            'title'         => "Detail | Penpas Rawat Jalan",
            'breadCrumb'    => "Data Masters \ Jadwal Dokter \ Detail"
        ];

        return view('pages/jadwal-dokter/detail', $data);
    }

    public function cetak()
    {
        $data = [
            'title'         => "Cetak Data Jadwal Dokter | Penpas Rawat Jalan",
            'breadCrumb'    => "Data Masters \ Jadwal Dokter \ Cetak Data"
        ];

        return view('pages/jadwal-dokter/cetak', $data);
    }

    //--------------------------------------------------------------------

}
