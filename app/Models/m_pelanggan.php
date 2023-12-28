<?php

namespace App\Models;

use CodeIgniter\Model;

class m_pelanggan extends Model
{
    protected $table = 'tbl_pelanggan_211170';
    protected $primaryKey = '211170_idpelanggan';
    protected $allowedFields = ['211170_namapelanggan', '211170_username', '211170_katasandi', '211170_notelp', '211170_alamat'];

    public function getPelanggan($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        } else {
            return $this->find($id);
        }
    }

    public function getPelangganById($id)
    {
        return $this->find($id);
    }

    public function updatePelanggan($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deletePelanggan($id)
    {
        return $this->delete($id);
    }

    public function isUsernameUnique($username, $id = null)
    {
        $builder = $this->where('211170_username', $username);
        if ($id !== null) {
            $builder = $builder->where('211170_idpelanggan !=', $id);
        }
        $result = $builder->countAllResults();
        return $result === 0;
    }
}
