<?php

namespace App\Controllers;

use App\Models\KamarModel;

class Kamar extends BaseController
{
    protected $kamarModel;

    public function __construct()
    {
        $this->kamarModel = new KamarModel();
    }

    public function index()
    {
        $data = [
            'title'         => "Kamar | SIPENPAS",
            'menu_open'     => "Data Master",
            'menu_active'   => "Kamar",
            'breadCrumb'    => ["Data Master", "Kamar"],
            'kamar'         => $this->kamarModel->findAll()
        ];

        return view('pages/kamar/main', $data);
    }

    //--------------------------------------------------------------------

}
