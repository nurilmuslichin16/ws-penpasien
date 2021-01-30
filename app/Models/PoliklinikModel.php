<?php

namespace App\Models;

use CodeIgniter\Model;

class PoliklinikModel extends Model
{
    protected $table = "tb_poliklinik";
    protected $primaryKey = "id_poli";
    protected $allowedFields = ['nama_poliklinik'];
    protected $useTimestamps = true;
}
