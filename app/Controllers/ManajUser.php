<?php

namespace App\Controllers;

use App\Models\PenggunaMobileModel;
use App\Models\PenggunaWebModel;

class ManajUser extends BaseController
{
    protected $webModel;
    protected $mobileModel;

    public function __construct()
    {
        $this->webModel = new PenggunaWebModel();
        $this->mobileModel = new PenggunaMobileModel();
    }

    public function index()
    {
        $data = [
            'title'         => "Pengguna Web | SIPENPAS",
            'menu_open'     => "Manajemen Pengguna",
            'menu_active'   => "Pengguna Web",
            'breadCrumb'    => ["Manajemen Pengguna", "Pengguna Web"],
            'web'           => $this->webModel->findAll()
        ];

        return view('pages/manaj-user/user-web', $data);
    }

    public function userMobile()
    {
        $data = [
            'title'         => "Pengguna Mobile | SIPENPAS",
            'menu_open'     => "Manajemen Pengguna",
            'menu_active'   => "Pengguna Mobile",
            'breadCrumb'    => ["Manajemen Pengguna", "Pengguna Mobile"],
            'mobile'        => $this->mobileModel->findAll()
        ];

        return view('pages/manaj-user/user-mobile', $data);
    }

    //--------------------------------------------------------------------

}
