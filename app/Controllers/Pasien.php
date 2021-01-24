<?php

namespace App\Controllers;

class Pasien extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Pasien | Penpas Rawat Jalan",
            'breadCrumb'    => "Pasien"
        ];

        return view('pages/pasien/main', $data);
    }

    public function tambah()
    {
        $data = [
            'title'         => "Tambah Data Pasien | Penpas Rawat Jalan",
            'breadCrumb'    => "Pasien \ Tambah Data"
        ];

        return view('pages/pasien/tambah', $data);
    }

    public function cetak()
    {
        $data = [
            'title'         => "Cetak Data Pasien | Penpas Rawat Jalan",
            'breadCrumb'    => "Pasien \ Cetak Data"
        ];

        return view('pages/pasien/cetak', $data);
    }

    //--------------------------------------------------------------------

}
