<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Profile | Penpas Rawat Jalan",
            'breadCrumb'    => "Profile"
        ];

        return view('pages/profile/main', $data);
    }

    //--------------------------------------------------------------------

}
