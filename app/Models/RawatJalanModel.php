<?php

namespace App\Models;

use CodeIgniter\Model;

class RawatJalanModel extends Model
{
    protected $table = "tb_rawat_jalan";
    protected $primaryKey = "id_rawat_jalan";
    protected $allowedFields = ['no_pendaftaran', 'no_rm', 'no_antrian', 'tgl_daftar', 'tgl_periksa', 'id_poli', 'id_dokter', 'asuransi', 'no_asuransi', 'status'];

    public function getRawatJalan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->find($id);
    }
}
