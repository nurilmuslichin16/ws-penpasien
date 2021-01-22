<?php

namespace App\Controllers;

class ManajUser extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Pengguna Web | Penpas Rawat Jalan",
            'breadCrumb'    => "Manajemen Pengguna \ Pengguna Web"
        ];

        return view('pages/manaj-user/user-web', $data);
    }

    public function userMobile()
    {
        $data = [
            'title'         => "Pengguna Mobile | Penpas Rawat Jalan",
            'breadCrumb'    => "Manajemen Pengguna \ Pengguna Mobile"
        ];

        return view('pages/manaj-user/user-mobile', $data);
    }

    //--------------------------------------------------------------------

}
