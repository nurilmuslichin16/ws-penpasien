<?php

namespace App\Controllers;

use App\Models\PoliklinikModel;

class Poliklinik extends BaseController
{
    protected $poliklinikModel;

    public function __construct()
    {
        $this->poliklinikModel = new PoliklinikModel();
    }

    public function index()
    {
        $data = [
            'title'         => "Poliklinik | SIPENPAS",
            'menu_open'     => "Data Master",
            'menu_active'   => "Poliklinik",
            'breadCrumb'    => ["Data Master", "Poliklinik"],
            'poliklinik'    => $this->poliklinikModel->findAll()
        ];

        return view('pages/poliklinik/main', $data);
    }

    public function tambah()
    {
        $this->poliklinikModel->save([
            'nama_poliklinik' => $this->request->getVar('nama_poliklinik')
        ]);

        return redirect()->to('/poliklinik');
    }

    //--------------------------------------------------------------------

}
