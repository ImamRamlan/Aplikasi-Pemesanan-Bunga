<?php

namespace App\Models;

use CodeIgniter\Model;

class m_auth extends Model
{  
    protected $table            = 'tbl_pelanggan_211170';
    protected $primaryKey       = '211170_idpelanggan';
    protected $allowedFields    = ['211170_namapelanggan', '211170_username', '211170_katasandi', '211170_notelp', '211170_alamat'];

    public function auth_pelanggan($username, $password)
    {
        return $this->db->table('tbl_pelanggan_211170')
            ->where([
                '211170_username' => $username,
                '211170_katasandi' => $password,
            ])
            ->get()
            ->getRowArray();
    }

}

