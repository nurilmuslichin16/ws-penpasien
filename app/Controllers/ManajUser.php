<?php

namespace App\Controllers;

class ManajUser extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Manajemen User | Penpas Rawat Jalan",
            'breadCrumb'    => "Manajemen User"
        ];

        return view('pages/manaj-user/main', $data);
    }

    //--------------------------------------------------------------------

}
