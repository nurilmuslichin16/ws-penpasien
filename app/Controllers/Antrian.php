<?php

namespace App\Controllers;

class Antrian extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Nomor Antrian | SIPENPAS",
            'menu_open'     => "Nomor Antrian",
            'menu_active'   => "-",
            'breadCrumb'    => ["Nomor Antrian"],
            //'antrian'     => $this->pasienModel->findAll()
        ];

        return view('pages/nomor-antrian/main', $data);
    }

    //--------------------------------------------------------------------

}
