<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pesanan extends Model
{
    protected $table            = 'tbl_pesanan_211170';
    protected $primaryKey       = '211170_idpesanan';
    protected $allowedFields    = ['211170_tanggalpesanan', '211170_idpelanggan', '211170_idbunga', '211170_statuspesanan', '211170_jumlah', '211170_totalharga'];

    public function Data($iduser = null)
    {
        return $this->db->table('tbl_pesanan_211170')
            ->join('tbl_pelanggan_211170', 'tbl_pelanggan_211170.211170_idpelanggan = tbl_pesanan_211170.211170_idpelanggan', 'left')
            ->join('tbl_jenis_211170', 'tbl_jenis_211170.211170_idbunga = tbl_pesanan_211170.211170_idbunga', 'left')
            ->where('tbl_pesanan_211170.211170_idpelanggan', $iduser)
            ->get()
            ->getResultArray();
    }
    public function tes()
    {
        return $this->db->table('tbl_pesanan_211170')
            ->join('tbl_pelanggan_211170', 'tbl_pelanggan_211170.211170_idpelanggan = tbl_pesanan_211170.211170_idpelanggan', 'left')
            ->join('tbl_jenis_211170', 'tbl_jenis_211170.211170_idbunga = tbl_pesanan_211170.211170_idbunga', 'left')
            ->get()
            ->getResultArray();
    }
    public function getDataByIdPesanan($idpesanan)
    {
        $result = $this->db->table('tbl_pesanan_211170')
            ->join('tbl_pelanggan_211170', 'tbl_pelanggan_211170.211170_idpelanggan = tbl_pesanan_211170.211170_idpelanggan', 'left')
            ->join('tbl_jenis_211170', 'tbl_jenis_211170.211170_idbunga = tbl_pesanan_211170.211170_idbunga', 'left')
            ->where('tbl_pesanan_211170.211170_idpesanan', $idpesanan)
            ->get()
            ->getResultArray();

        // Tambahkan pernyataan ini untuk melihat hasil query
        echo $this->db->getLastQuery(); // atau var_dump($result);

        return $result;
    }
    public function updateStatusPesanan($idPesanan, $status)
    {
        $this->set('211170_statuspesanan', $status);
        $this->where('211170_idpesanan', $idPesanan);
        $this->update();
    }
}
