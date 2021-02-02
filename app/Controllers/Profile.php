<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Ubah Profile | SIPENPAS",
            'menu_open'     => "Profile",
            'menu_active'   => "Ubah Profile",
            'breadCrumb'    => ["Profile", "Ubah Profile"],
            //'antrian'     => $this->pasienModel->findAll()
        ];

        return view('pages/profile/ubah-profile', $data);
    }

    public function ubahPassword()
    {
        $data = [
            'title'         => "Ubah Password | SIPENPAS",
            'menu_open'     => "Profile",
            'menu_active'   => "Ubah Password",
            'breadCrumb'    => ["Profile", "Ubah Password"],
            //'antrian'     => $this->pasienModel->findAll()
        ];

        return view('pages/profile/ubah-password', $data);
    }

    //--------------------------------------------------------------------

}
