<?php

namespace App\Models;

use CodeIgniter\Model;

class CutiModel extends Model
{
    protected $table = "tb_cuti_dokter";
    protected $primaryKey = "id_cuti";
    protected $allowedFields = ['id_dokter', 'tanggal_cuti'];
    protected $useTimestamps = true;
}
