<?php

namespace App\Controllers;

use App\Models\PasienModel;

class Pasien extends BaseController
{
    protected $pasienModel;

    public function __construct()
    {
        $this->pasienModel = new PasienModel();
    }

    public function index()
    {
        $data = [
            'title'         => "Pasien | SIPENPAS",
            'menu_open'     => "Pasien",
            'menu_active'   => "-",
            'breadCrumb'    => ["Pasien"],
            'pasien'        => $this->pasienModel->getPasien()
        ];

        return view('pages/pasien/main', $data);
    }

    public function detail($no_rm)
    {
        $data = [
            'title'         => "Detail Pasien | SIPENPAS",
            'menu_open'     => "Pasien",
            'menu_active'   => "-",
            'breadCrumb'    => ["Pasien", "Detail"],
            'pasien'        => $this->pasienModel->getPasien($no_rm)
        ];

        return view('pages/pasien/detail', $data);
    }

    public function tambah()
    {
        $data = [
            'title'         => "Tambah Pasien | SIPENPAS",
            'menu_open'     => "Pasien",
            'menu_active'   => "-",
            'breadCrumb'    => ["Pasien", "Tambah"]
        ];

        return view('pages/pasien/tambah', $data);
    }

    //--------------------------------------------------------------------

}
