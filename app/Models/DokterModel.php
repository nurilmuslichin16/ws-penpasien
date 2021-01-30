<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $table = "tb_dokter";
    protected $primaryKey = "id_dokter";
    protected $allowedFields = ['nama_depan', 'nama_belakang', 'jekel', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_hp', 'email', 'id_poli', 'lulusan', 'tahun_lulus', 'foto'];
    protected $useTimestamps = true;
}
