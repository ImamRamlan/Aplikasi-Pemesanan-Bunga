<?php

namespace App\Models;

use CodeIgniter\Model;

class m_login extends Model
{
    protected $table            = 'tbl_admin_211170';
    protected $primaryKey       = '211170_idadmin';
    
    function auth_admin($username,$password){
        return $this->db->table('tbl_admin_211170')->where([
            '211170_username' => $username,
            '211170_katasandi' => $password
        ])->get()->getRowArray();

    }
}