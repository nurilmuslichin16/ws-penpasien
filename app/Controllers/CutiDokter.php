<?php

namespace App\Controllers;

use App\Models\CutiModel;

class CutiDokter extends BaseController
{
    protected $cutiModel;

    public function __construct()
    {
        $this->cutiModel = new CutiModel();
    }
    public function index()
    {
        $data = [
            'title'         => "Cuti Dokter | SIPENPAS",
            'menu_open'     => "Data Master",
            'menu_active'   => "Cuti Dokter",
            'breadCrumb'    => ["Data Master", "Cuti Dokter"],
            'cuti'          => $this->cutiModel->findAll()
        ];

        return view('pages/cuti-dokter/main', $data);
    }

    //--------------------------------------------------------------------

}
