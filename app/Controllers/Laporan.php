<?php

namespace App\Controllers;

class Laporan extends BaseController
{

    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title'         => "Laporan Dokter | SIPENPAS",
            'menu_open'     => "Laporan",
            'menu_active'   => "Laporan Dokter",
            'breadCrumb'    => ["Laporan", "Laporan Dokter"]
        ];

        return view('pages/laporan/dokter', $data);
    }

    //--------------------------------------------------------------------

    public function jadwalDokter()
    {
        $data = [
            'title'         => "Laporan Jadwal Dokter | SIPENPAS",
            'menu_open'     => "Laporan",
            'menu_active'   => "Laporan Jadwal Dokter",
            'breadCrumb'    => ["Laporan", "Laporan Jadwal Dokter"]
        ];

        return view('pages/laporan/jadwal-dokter', $data);
    }

    //--------------------------------------------------------------------

    public function pasien()
    {
        $data = [
            'title'         => "Laporan Pasien | SIPENPAS",
            'menu_open'     => "Laporan",
            'menu_active'   => "Laporan Pasien",
            'breadCrumb'    => ["Laporan", "Laporan Pasien"]
        ];

        return view('pages/laporan/pasien', $data);
    }

    //--------------------------------------------------------------------

    public function rawatJalan()
    {
        $data = [
            'title'         => "Laporan Rawat Jalan | SIPENPAS",
            'menu_open'     => "Laporan",
            'menu_active'   => "Laporan Rawat Jalan",
            'breadCrumb'    => ["Laporan", "Laporan Rawat Jalan"]
        ];

        return view('pages/laporan/rawat-jalan', $data);
    }

    //--------------------------------------------------------------------

    public function rawatInap()
    {
        $data = [
            'title'         => "Laporan Rawat Inap | SIPENPAS",
            'menu_open'     => "Laporan",
            'menu_active'   => "Laporan Rawat Inap",
            'breadCrumb'    => ["Laporan", "Laporan Rawat Inap"]
        ];

        return view('pages/laporan/rawat-inap', $data);
    }
}
