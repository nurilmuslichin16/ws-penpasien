<?php

namespace App\Controllers;

use App\Models\PenggunaMobileModel;
use App\Models\PenggunaWebModel;

class ManajUser extends BaseController
{
    protected $webModel;
    protected $mobileModel;
    protected $enkripsi;

    public function __construct()
    {
        // Konfigurasi Library Encryption Codeigniter
        $config         = new \Config\Encryption();
        $config->key    = 'aBigsecret_ofAtleast32Characters';
        $config->driver = 'OpenSSL';

        $this->enkripsi = \Config\Services::encrypter($config);

        $this->webModel = new PenggunaWebModel();
        $this->mobileModel = new PenggunaMobileModel();
    }

    public function index()
    {
        $data = [
            'title'         => "Pengguna Web | SIPENPAS",
            'menu_open'     => "Manajemen Pengguna",
            'menu_active'   => "Pengguna Web",
            'breadCrumb'    => ["Manajemen Pengguna", "Pengguna Web"]
        ];

        return view('pages/manaj-user/web/main', $data);
    }

    //--------------------------------------------------------------------
    // AJAX Function
    //--------------------------------------------------------------------

    public function getDataWeb()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'web'  => $this->webModel->findAll()
            ];

            $msg = [
                'data' => view('pages/manaj-user/web/ajax/tabel-main', $data)
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function formTambahWeb()
    {
        if ($this->request->isAJAX()) {
            $msg = [
                'data' => view('pages/manaj-user/web/ajax/modal-tambah')
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function tambahWeb()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();

            $valid = $this->_validasiWeb("tambah");

            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama_lengkap'  => $validation->getError('nama_lengkap'),
                        'email'         => $validation->getError('email'),
                        'jekel'         => $validation->getError('jekel'),
                        'level'         => $validation->getError('level')
                    ]
                ];
            } else {
                $password_default = "sipenpas";
                $password_hash = $this->enkripsi->encrypt($password_default);
                $save = [
                    'nama_lengkap'  => $this->request->getVar('nama_lengkap'),
                    'email'         => $this->request->getVar('email'),
                    'jekel'         => $this->request->getVar('jekel'),
                    'level_user'    => $this->request->getVar('level'),
                    'password'      => $password_hash,
                    'status'        => 1
                ];

                $this->webModel->insert($save);

                $msg = [
                    'sukses' => 'Data pengguna web berhasil tersimpan'
                ];
            }

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }

        return false;
    }

    public function formUbahWeb()
    {
        if ($this->request->isAJAX()) {
            $id_user_web = $this->request->getVar('id_user_web');

            $detail = $this->webModel->find($id_user_web);

            $data = [
                'id_user_web'   => $detail['id_user_web'],
                'nama_lengkap'  => $detail['nama_lengkap'],
                'email'         => $detail['email'],
                'jekel'         => $detail['jekel'],
                'level'         => $detail['level_user'],
                'status'        => $detail['status']
            ];

            $msg = [
                'data' => view('pages/manaj-user/web/ajax/modal-ubah', $data)
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function ubahWeb()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();

            $valid = $this->_validasiWeb("ubah");

            if (!$valid) {
                $msg = [
                    'error' => [
                        'level'         => $validation->getError('level')
                    ]
                ];
            } else {
                $id_user_web = $this->request->getVar('id_user_web');
                $save = [
                    'level_user'  => $this->request->getVar('level'),
                    'status'      => $this->request->getVar('status') == "aktif" ? 1 : 0
                ];

                $this->webModel->update($id_user_web, $save);

                $msg = [
                    'sukses' => 'Data pengguna web berhasil diubah'
                ];
            }

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function hapusWeb()
    {
        if ($this->request->isAJAX()) {
            $id_user_web   = $this->request->getVar('id_user_web');
            $nama_lengkap  = $this->request->getVar('nama_lengkap');

            $this->webModel->delete($id_user_web);

            $msg = [
                'sukses' => "Data pengguna web $nama_lengkap berhasil dihapus"
            ];

            echo json_encode($msg);
        }
    }

    private function _validasiWeb($type)
    {
        if ($type == "tambah") {
            $valid = $this->validate([
                'nama_lengkap' => [
                    'label'     => 'Nama Lengkap',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'      => '{field} tidak boleh kosong'
                    ]
                ],
                'email' => [
                    'label'     => 'Email',
                    'rules'     => 'required|valid_email|is_unique[tb_pengguna_web.email]',
                    'errors'    => [
                        'required'      => '{field} tidak boleh kosong',
                        'valid_email'   => '{field} tidak valid',
                        'is_unique'     => '{field} sudah terdaftar'
                    ]
                ],
                'jekel' => [
                    'label'     => 'Jenis Kelamin',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong'
                    ]
                ],
                'level' => [
                    'label'     => 'Level User',
                    'rules'     => 'required|not_in_list[Pilih Level]',
                    'errors'    => [
                        'required'      => '{field} tidak boleh kosong',
                        'not_in_list'   => 'Pilih salah satu {field} dahulu'
                    ]
                ]
            ]);
        } else {
            $valid = $this->validate([
                'level' => [
                    'label'     => 'Level User',
                    'rules'     => 'required|not_in_list[Pilih Level]',
                    'errors'    => [
                        'required'      => '{field} tidak boleh kosong',
                        'not_in_list'   => 'Pilih salah satu {field} dahulu'
                    ]
                ]
            ]);
        }

        return $valid;
    }

    // -------------------------------------------------------------- //
    // MOBILE MOBILE MOBILE MOBILE MOBILE MOBILE MOBILE MOBILE MOBILE //
    // -------------------------------------------------------------- //

    public function userMobile()
    {
        $data = [
            'title'         => "Pengguna Mobile | SIPENPAS",
            'menu_open'     => "Manajemen Pengguna",
            'menu_active'   => "Pengguna Mobile",
            'breadCrumb'    => ["Manajemen Pengguna", "Pengguna Mobile"]
        ];

        return view('pages/manaj-user/mobile/main', $data);
    }

    //--------------------------------------------------------------------
    // AJAX Function
    //--------------------------------------------------------------------

    public function getData()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'cuti'  => $this->mobileModel->findAll()
            ];

            $msg = [
                'data' => view('pages/manaj-user/ajax/tabel-main', $data)
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
                'data' => view('pages/manaj-user/ajax/modal-tambah')
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

                $this->mobileModel->insert($save);

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

            $detail = $this->mobileModel->find($id_cuti);

            $data = [
                'id'        => $detail['id_cuti'],
                'dokter'    => $detail['id_dokter'],
                'tanggal'   => $detail['tanggal_cuti']
            ];

            $msg = [
                'data' => view('pages/manaj-user/ajax/modal-ubah', $data)
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

                $this->mobileModel->update($id_cuti, $save);

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

            $this->mobileModel->delete($id_cuti);

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
