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
                'data' => view('pages/poliklinik/ajax/modal-tambah')
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function tambah()
    {
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
            } else {
                $save = [
                    'nama_poliklinik' => $this->request->getVar('nama_poliklinik')
                ];

                $this->poliklinikModel->insert($save);

                $msg = [
                    'sukses' => 'Data poliklinik berhasil tersimpan'
                ];
            }

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }

        return false;
    }

    public function formUbah()
    {
        if ($this->request->isAJAX()) {
            $id_poli = $this->request->getVar('id_poli');

            $detail = $this->poliklinikModel->find($id_poli);

            $data = [
                'id'     => $detail['id_poli'],
                'nama'   => $detail['nama_poliklinik']
            ];

            $msg = [
                'data' => view('pages/poliklinik/ajax/modal-ubah', $data)
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function ubah()
    {
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
            } else {
                $id_poli = $this->request->getVar('id_poliklinik');
                $save = [
                    'nama_poliklinik' => $this->request->getVar('nama_poliklinik')
                ];

                $this->poliklinikModel->update($id_poli, $save);

                $msg = [
                    'sukses' => 'Data poliklinik berhasil diubah'
                ];
            }

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function hapus()
    {
        if ($this->request->isAJAX()) {
            $id_poli = $this->request->getVar('id_poli');
            $nama_poli = $this->request->getVar('nama_poli');

            $this->poliklinikModel->delete($id_poli);

            $msg = [
                'sukses' => "Data poliklinik $nama_poli berhasil dihapus"
            ];

            echo json_encode($msg);
        }
    }
}
