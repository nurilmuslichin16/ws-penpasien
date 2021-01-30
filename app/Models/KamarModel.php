<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{
    protected $table = "tb_kamar";
    protected $primaryKey = "id_kamar";
    protected $allowedFields = ['nama_kamar', 'tipe', 'stok_tempat_tidur', 'tempat_tidur_terpakai'];
    protected $useTimestamps = true;
}
