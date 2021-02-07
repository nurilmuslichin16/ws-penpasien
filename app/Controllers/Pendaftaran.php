<?php

namespace App\Controllers;

use App\Models\RawatInapModel;
use App\Models\RawatJalanModel;

class Pendaftaran extends BaseController
{
    protected $rawatJalan;
    protected $rawatInap;

    public function __construct()
    {
        $this->rawatJalan = new RawatJalanModel();
        $this->rawatInap = new RawatInapModel();
    }

    public function index()
    {
        $data = [
            'title'         => "Rawat Jalan | SIPENPAS",
            'menu_open'     => "Pendaftaran",
            'menu_active'   => "Rawat Jalan",
            'breadCrumb'    => ["Pendaftaran", "Rawat Jalan"],
            'rawat_jalan'   => $this->rawatJalan->getRawatJalan()
        ];

        return view('pages/rawat-jalan/main', $data);
    }

    public function detailRawatJalan($id)
    {
        $data = [
            'title'         => "Detail Rawat Jalan | SIPENPAS",
            'menu_open'     => "Pendaftaran",
            'menu_active'   => "Rawat Jalan",
            'breadCrumb'    => ["Pendaftaran", "Rawat Jalan", "Detail"],
            'rawat_jalan'   => $this->rawatJalan->getRawatJalan($id)
        ];

        return view('pages/rawat-jalan/detail', $data);
    }

    public function tambahRawatJalan()
    {
        $data = [
            'title'         => "Tambah Pendaftaran Rawat Jalan | SIPENPAS",
            'menu_open'     => "Pendaftaran",
            'menu_active'   => "Rawat Jalan",
            'breadCrumb'    => ["Pendaftaran", "Rawat Jalan", "Tambah"],
            // 'rawat_jalan'   => $this->rawatJalan->findAll()
        ];

        return view('pages/rawat-jalan/tambah', $data);
    }

    //--------------------------------------------------------------------
    //--------------------------------------------------------------------
    //--------------------------------------------------------------------

    public function rawatInap()
    {
        $data = [
            'title'         => "Rawat Inap | SIPENPAS",
            'menu_open'     => "Pendaftaran",
            'menu_active'   => "Rawat Inap",
            'breadCrumb'    => ["Pendaftaran", "Rawat Inap"],
            'rawat_inap'    => $this->rawatInap->getRawatInap()
        ];

        return view('pages/rawat-inap/main', $data);
    }

    public function detailRawatInap($id)
    {
        $data = [
            'title'         => "Detail Rawat Inap | SIPENPAS",
            'menu_open'     => "Pendaftaran",
            'menu_active'   => "Rawat Inap",
            'breadCrumb'    => ["Pendaftaran", "Rawat Inap", "Detail"],
            'rawat_inap'   => $this->rawatInap->getRawatInap($id)
        ];

        return view('pages/rawat-inap/detail', $data);
    }

    public function tambahRawatInap()
    {
        $data = [
            'title'         => "Tambah Pendaftaran Rawat Inap | SIPENPAS",
            'menu_open'     => "Pendaftaran",
            'menu_active'   => "Rawat Inap",
            'breadCrumb'    => ["Pendaftaran", "Rawat Inap", "Tambah"],
            // 'rawat_jalan'   => $this->rawatJalan->findAll()
        ];

        return view('pages/rawat-inap/tambah', $data);
    }
}
