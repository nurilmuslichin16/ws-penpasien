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

    public function cetakRawatJalan()
    {
        $data = [
            'title'         => "Cetak Data Rawat Jalan | Penpas Rawat Jalan",
            'breadCrumb'    => "Pendaftaran \ Rawat Jalan \ Cetak Data"
        ];

        return view('pages/rawat-jalan/cetak', $data);
    }

    public function cetakRawatInap()
    {
        $data = [
            'title'         => "Cetak Data Rawat Inap | Penpas Rawat Jalan",
            'breadCrumb'    => "Pendaftaran \ Rawat Inap \ Cetak Data"
        ];

        return view('pages/rawat-inap/cetak', $data);
    }

    //--------------------------------------------------------------------

}
