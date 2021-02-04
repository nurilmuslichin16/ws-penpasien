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
            'pasien'        => $this->pasienModel->findAll()
        ];

        return view('pages/pasien/main', $data);
    }

    public function tambah()
    {
        $data = [
            'title'         => "Tambah Pasien | SIPENPAS",
            'menu_open'     => "Pasien",
            'menu_active'   => "-",
            'breadCrumb'    => ["Pasien", "Tambah Pasien"]
        ];

        return view('pages/pasien/tambah', $data);
    }

    //--------------------------------------------------------------------

}
