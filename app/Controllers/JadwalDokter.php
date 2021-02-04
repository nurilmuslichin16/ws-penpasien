<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Models\PoliklinikModel;

class JadwalDokter extends BaseController
{
    protected $jadwalModel;

    public function __construct()
    {
        $this->jadwalModel = new JadwalModel();
    }

    public function index()
    {
        $poliklinik = new PoliklinikModel();

        $data = [
            'title'         => "Jadwal Dokter | SIPENPAS",
            'menu_open'     => "Data Master",
            'menu_active'   => "Jadwal Dokter",
            'breadCrumb'    => ["Data Master", "Jadwal Dokter"],
            'poliklinik'    => $poliklinik->findAll()
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

    //--------------------------------------------------------------------

}
