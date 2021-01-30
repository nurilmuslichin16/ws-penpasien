<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = "tb_jadwal_dokter";
    protected $primaryKey = "id_jadwal_dokter";
    protected $allowedFields = ['hari', 'jam_mulai', 'jam_selesai', 'id_dokter', 'id_poli'];
    protected $useTimestamps = true;
}
