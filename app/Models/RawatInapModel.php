<?php

namespace App\Models;

use CodeIgniter\Model;

class RawatInapModel extends Model
{
    protected $table = "tb_rawat_inap";
    protected $primaryKey = "id_rawat_inap";
    protected $allowedFields = ['no_pendaftaran', 'no_rm', 'tanggal_daftar', 'id_kamar', 'asuransi', 'no_asuransi', 'status'];
}
