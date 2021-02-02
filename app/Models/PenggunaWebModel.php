<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaWebModel extends Model
{
    protected $table = "tb_pengguna_web";
    protected $primaryKey = "id_user_web";
    protected $allowedFields = ['nama_lengkap', 'email', 'jekel', 'level_user', 'password', 'status', 'foto'];
    protected $useTimestamps = true;
}
