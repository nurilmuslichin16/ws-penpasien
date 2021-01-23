<?php

namespace App\Controllers;

class Dokter extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Dokter | Penpas Rawat Jalan",
            'breadCrumb'    => "Data Masters \ Dokter"
        ];

        return view('pages/dokter/main', $data);
    }

    public function tambah()
    {
        $data = [
            'title'         => "Tambah Dokter | Penpas Rawat Jalan",
            'breadCrumb'    => "Data Masters \ Dokter \ Tambah Dokter"
        ];

        return view('pages/dokter/tambah', $data);
    }

    public function cetak()
    {
        $data = [
            'title'         => "Tambah Dokter | Penpas Rawat Jalan",
            'breadCrumb'    => "Data Masters \ Dokter \ Cetak Data Dokter"
        ];

        return view('pages/dokter/cetak', $data);
    }

    //--------------------------------------------------------------------

}
