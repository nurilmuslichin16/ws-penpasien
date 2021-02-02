<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaMobileModel extends Model
{
    protected $table = "tb_pengguna_mobile";
    protected $primaryKey = "id_user_mobile";
    protected $allowedFields = ['nik', 'token', 'password', 'status'];
    protected $useTimestamps = true;
}
