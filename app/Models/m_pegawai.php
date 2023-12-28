<?php

namespace App\Models;

use CodeIgniter\Model;

class m_pegawai extends Model
{
    protected $table = 'tbl_admin_211170';
    protected $primaryKey = '211170_idadmin';
    protected $allowedFields = ['211170_username', '211170_katasandi', '211170_level'];

    public function getData()
    {
        return $this->db->table($this->table)->get()->getResultArray();
    }

    public function insertData($username, $katasandi, $level)
    {
        $data = [
            '211170_username' => $username,
            '211170_katasandi' => $katasandi,
            '211170_level' => $level,
        ];

        return $this->db->table($this->table)->insert($data);
    }

    public function updateData($id, $username, $katasandi, $level)
    {
        $data = [
            '211170_username' => $username,
            '211170_katasandi' => $katasandi,
            '211170_level' => $level,
        ];

        return $this->db->table($this->table)->where($this->primaryKey, $id)->update($data);
    }
}
