<?php

namespace App\Controllers;

class Poliklinik extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => "Poliklinik | Penpas Rawat Jalan",
            'breadCrumb'    => "Poliklinik"
        ];

        return view('pages/poliklinik/main', $data);
    }

    //--------------------------------------------------------------------

}