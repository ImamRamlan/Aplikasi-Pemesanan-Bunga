<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Transaksi extends Model
{
    protected $table            = 'tbl_pembayaran_211170';
    protected $primaryKey       = '211170_idpembayaran';
    protected $allowedFields    = ['211170_idpesanan', '211170_tanggalpembayaran','211170_metode'];

    public function Data()
    {
        return $this->db->table('tbl_pembayaran_211170')
            ->join('tbl_pesanan_211170', 'tbl_pesanan_211170.211170_idpesanan = tbl_pembayaran_211170.211170_idpesanan', 'left')
            ->get()
            ->getResultArray();
    }
    public function getDataByDateRange($awalTanggal, $akhirTanggal)
    {
        return $this->db->table('tbl_pembayaran_211170')
            ->join('tbl_pesanan_211170', 'tbl_pesanan_211170.211170_idpesanan = tbl_pembayaran_211170.211170_idpesanan', 'left')
            ->where('tbl_pembayaran_211170.211170_tanggalpembayaran >=', $awalTanggal)
            ->where('tbl_pembayaran_211170.211170_tanggalpembayaran <=', $akhirTanggal)
            ->get()
            ->getResultArray();
    }
}