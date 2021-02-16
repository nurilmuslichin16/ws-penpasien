<?php

namespace App\Controllers;

use App\Models\CutiModel;

class CutiDokter extends BaseController
{
    protected $cutiModel;

    public function __construct()
    {
        $this->cutiModel = new CutiModel();
    }
    public function index()
    {
        $data = [
            'title'         => "Cuti Dokter | SIPENPAS",
            'menu_open'     => "Data Master",
            'menu_active'   => "Cuti Dokter",
            'breadCrumb'    => ["Data Master", "Cuti Dokter"]
        ];

        return view('pages/cuti-dokter/main', $data);
    }

    //--------------------------------------------------------------------
    // AJAX Function
    //--------------------------------------------------------------------

    public function getData()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'cuti'  => $this->cutiModel->findAll()
            ];

            $msg = [
                'data' => view('pages/cuti-dokter/ajax/tabel-main', $data)
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
                'data' => view('pages/cuti-dokter/ajax/modal-tambah')
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

            $valid = $this->_validasi();

            if (!$valid) {
                $msg = [
                    'error' => [
                        'dokter'    => $validation->getError('dokter'),
                        'tanggal'   => $validation->getError('tanggal')
                    ]
                ];
            } else {
                $save = [
                    'id_dokter'     => $this->request->getVar('dokter'),
                    'tanggal_cuti'  => $this->request->getVar('tanggal')
                ];

                $this->cutiModel->insert($save);

                $msg = [
                    'sukses' => 'Data cuti dokter berhasil tersimpan'
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
            $id_cuti = $this->request->getVar('id_cuti');

            $detail = $this->cutiModel->find($id_cuti);

            $data = [
                'id'        => $detail['id_cuti'],
                'dokter'    => $detail['id_dokter'],
                'tanggal'   => $detail['tanggal_cuti']
            ];

            $msg = [
                'data' => view('pages/cuti-dokter/ajax/modal-ubah', $data)
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

            $valid = $this->_validasi();

            if (!$valid) {
                $msg = [
                    'error' => [
                        'dokter'    => $validation->getError('dokter'),
                        'tanggal'   => $validation->getError('tanggal')
                    ]
                ];
            } else {
                $id_cuti = $this->request->getVar('id_cuti');
                $save = [
                    'id_dokter'     => $this->request->getVar('dokter'),
                    'tanggal_cuti'  => $this->request->getVar('tanggal')
                ];

                $this->cutiModel->update($id_cuti, $save);

                $msg = [
                    'sukses' => 'Data cuti dokter berhasil diubah'
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
            $id_cuti   = $this->request->getVar('id_cuti');
            $dokter = $this->request->getVar('dokter');

            $this->cutiModel->delete($id_cuti);

            $msg = [
                'sukses' => "Cuti dokter $dokter berhasil dihapus"
            ];

            echo json_encode($msg);
        }
    }

    private function _validasi()
    {
        $valid = $this->validate([
            'dokter' => [
                'label'     => 'Dokter',
                'rules'     => 'required|not_in_list[Pilih Dokter]',
                'errors'    => [
                    'required'      => '{field} tidak boleh kosong',
                    'not_in_list'   => 'Pilih salah satu {field} dahulu'
                ]
            ],
            'tanggal' => [
                'label'     => 'Tanggal Cuti',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        return $valid;
    }
}
