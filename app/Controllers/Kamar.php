<?php

namespace App\Controllers;

use App\Models\KamarModel;

class Kamar extends BaseController
{
    protected $kamarModel;

    public function __construct()
    {
        $this->kamarModel = new KamarModel();
    }

    public function index()
    {
        $data = [
            'title'         => "Kamar | SIPENPAS",
            'menu_open'     => "Data Master",
            'menu_active'   => "Kamar",
            'breadCrumb'    => ["Data Master", "Kamar"]
        ];

        return view('pages/kamar/main', $data);
    }

    //--------------------------------------------------------------------
    // AJAX Function
    //--------------------------------------------------------------------

    public function getData()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'kamar'  => $this->kamarModel->findAll()
            ];

            $msg = [
                'data' => view('pages/kamar/ajax/tabel-main', $data)
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
                'data' => view('pages/kamar/ajax/modal-tambah')
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

            $valid = $this->_validasi("tambah");

            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama_kamar'            => $validation->getError('nama_kamar'),
                        'tipe_kamar'            => $validation->getError('tipe_kamar'),
                        'jumlah_tempat_tidur'   => $validation->getError('jumlah_tempat_tidur')
                    ]
                ];
            } else {
                $save = [
                    'nama_kamar'        => $this->request->getVar('nama_kamar'),
                    'tipe'              => $this->request->getVar('tipe_kamar'),
                    'stok_tempat_tidur' => $this->request->getVar('jumlah_tempat_tidur')
                ];

                $this->kamarModel->insert($save);

                $msg = [
                    'sukses' => 'Data kamar berhasil tersimpan'
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
            $id_kamar = $this->request->getVar('id_kamar');

            $detail = $this->kamarModel->find($id_kamar);

            $data = [
                'id'     => $detail['id_kamar'],
                'nama'   => $detail['nama_kamar'],
                'tipe'   => $detail['tipe'],
                'jumlah' => $detail['stok_tempat_tidur']
            ];

            $msg = [
                'data' => view('pages/kamar/ajax/modal-ubah', $data)
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

            $valid = $this->_validasi("ubah");

            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama_kamar'            => $validation->getError('nama_kamar'),
                        'tipe_kamar'            => $validation->getError('tipe_kamar'),
                        'jumlah_tempat_tidur'   => $validation->getError('jumlah_tempat_tidur')
                    ]
                ];
            } else {
                $id_kamar = $this->request->getVar('id_kamar');
                $save = [
                    'nama_kamar'        => $this->request->getVar('nama_kamar'),
                    'tipe'              => $this->request->getVar('tipe_kamar'),
                    'stok_tempat_tidur' => $this->request->getVar('jumlah_tempat_tidur')
                ];

                $this->kamarModel->update($id_kamar, $save);

                $msg = [
                    'sukses' => 'Data kamar berhasil diubah'
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
            $id_kamar   = $this->request->getVar('id_kamar');
            $nama_kamar = $this->request->getVar('nama_kamar');

            $this->kamarModel->delete($id_kamar);

            $msg = [
                'sukses' => "Data kamar $nama_kamar berhasil dihapus"
            ];

            echo json_encode($msg);
        }
    }

    private function _validasi($type)
    {
        if ($type == "tambah") {
            $valid = $this->validate([
                'nama_kamar' => [
                    'label'     => 'Nama Kamar',
                    'rules'     => 'required|is_unique[tb_kamar.nama_kamar]',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong',
                        'is_unique' => '{field} tidak boleh ada yang sama, silahkan coba yang lain'
                    ]
                ],
                'tipe_kamar' => [
                    'label'     => 'Tipe Kamar',
                    'rules'     => 'required|not_in_list[Pilih Tipe]',
                    'errors'    => [
                        'required'      => '{field} tidak boleh kosong',
                        'not_in_list'   => 'Pilih salah satu {field} dahulu'
                    ]
                ],
                'jumlah_tempat_tidur' => [
                    'label'     => 'Jumlah Tempat Tidur',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong'
                    ]
                ]
            ]);
        } else {
            $valid = $this->validate([
                'nama_kamar' => [
                    'label'     => 'Nama Kamar',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong'
                    ]
                ],
                'tipe_kamar' => [
                    'label'     => 'Tipe Kamar',
                    'rules'     => 'required|not_in_list[Pilih Tipe]',
                    'errors'    => [
                        'required'      => '{field} tidak boleh kosong',
                        'not_in_list'   => 'Pilih salah satu {field} dahulu'
                    ]
                ],
                'jumlah_tempat_tidur' => [
                    'label'     => 'Jumlah Tempat Tidur',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong'
                    ]
                ]
            ]);
        }

        return $valid;
    }
}
