<?php

namespace App\Controllers;

use App\Models\DokterModel;

class Dokter extends BaseController
{
    protected $dokterModel;

    public function __construct()
    {
        $this->dokterModel = new DokterModel();
    }

    public function index()
    {
        $data = [
            'title'         => "Dokter | SIPENPAS",
            'menu_open'     => "Data Master",
            'menu_active'   => "Dokter",
            'breadCrumb'    => ["Data Master", "Dokter"],
            'dokter'        => $this->dokterModel->getDokter()
        ];

        return view('pages/dokter/main', $data);
    }

    public function tambah()
    {
        $data = [
            'title'         => "Tambah Dokter | SIPENPAS",
            'menu_open'     => "Data Master",
            'menu_active'   => "Dokter",
            'breadCrumb'    => ["Data Master", "Dokter", "Tambah"]
        ];

        return view('pages/dokter/tambah', $data);
    }

    public function detail($id)
    {
        $data = [
            'title'         => "Detail Dokter | SIPENPAS",
            'menu_open'     => "Data Master",
            'menu_active'   => "Dokter",
            'breadCrumb'    => ["Data Master", "Dokter", "Detail"],
            'dokter'        => $this->dokterModel->getDokter($id)
        ];

        return view('pages/dokter/detail', $data);
    }
}
