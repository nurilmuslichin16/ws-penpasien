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
            'breadCrumb'    => ["Data Master", "Poliklinik"]
        ];

        return view('pages/poliklinik/main', $data);
    }

    //--------------------------------------------------------------------
    // AJAX Function
    //--------------------------------------------------------------------

    public function getData()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'poliklinik'  => $this->poliklinikModel->findAll()
            ];

            $msg = [
                'data' => view('pages/poliklinik/ajax/tabel-main', $data)
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function formTambah()
    {
        if ($this->request->isAJAX()) {
            $msg = [
                'data' => view('pages/poliklinik/ajax/modal-form')
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function tambah()
    {
        // $this->poliklinikModel->save([
        //     'nama_poliklinik' => $this->request->getVar('nama_poliklinik')
        // ]);
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();

            $valid = $this->validate([
                'nama_poliklinik' => [
                    'label' => 'Nama Poliklinik',
                    'rules' => 'required|is_unique[tb_poliklinik.nama_poliklinik]',
                    'errors' => [
                        'required'  => '{field} tidak boleh kosong',
                        'is_unique' => '{field} tidak boleh ada yang sama, silahkan coba yang lain'
                    ]
                ]
            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama_poliklinik' => $validation->getError('nama_poliklinik')
                    ]
                ];

                echo json_encode($msg);
            }
        } else {
            exit('Maaf tidak dapat diproses');
        }

        return false;
    }
}
