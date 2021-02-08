<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table = "tb_pasien";
    protected $primaryKey = "no_rm";
    protected $allowedFields = ['nik', 'nama_depan', 'nama_belakang', 'jekel', 'tempat_lahir', 'tanggal_lahir', 'agama', 'pendidikan_terakhir', 'status_perkawinan', 'prov', 'kota_kab', 'kec', 'kel', 'alamat', 'kewarganegaraan', 'no_hp', 'email'];
    protected $useTimestamps = true;

    public function getPasien($no_rm = false)
    {
        if ($no_rm == false) {
            return $this->findAll();
        }

        return $this->find($no_rm);
    }
}
