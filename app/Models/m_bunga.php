<?php

namespace App\Models;

use CodeIgniter\Model;

class m_bunga extends Model
{
    protected $table            = 'tbl_jenis_211170';
    protected $primaryKey       = '211170_idbunga';
    protected $allowedFields    = ['211170_namabunga', '211170_deskripsi', '211170_hargasatuan', '211170_stok', '211170_gambar'];

    public function insertBunga($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function getAllBunga()
    {
        return $this->findAll();
    }
}
