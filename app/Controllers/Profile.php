<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Profile | Penpas Rawat Jalan",
            'breadCrumb'    => "Profile \ Ubah Profile"
        ];

        return view('pages/profile/ubah-profile', $data);
    }

    public function ubahPassword()
    {
        $data = [
            'title'         => "Profile | Penpas Rawat Jalan",
            'breadCrumb'    => "Profile \ Ubah Password"
        ];

        return view('pages/profile/ubah-password', $data);
    }

    //--------------------------------------------------------------------

}
