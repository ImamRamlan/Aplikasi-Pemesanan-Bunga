<?php

namespace App\Controllers;
use App\Models\M_Pesanan;
use App\Models\M_Transaksi;

class Pesan extends BaseController
{
    protected $M_pesanan;
    protected $mTransaksi;

    public function __construct()
    {
        $this->M_pesanan = new M_Pesanan();
        $this->mTransaksi = new M_Transaksi();
    }
    public function index()
    {
        $iduser = session()->get('id');
        $data =[
            'title' => 'Riwayat Pemesanan Anda.',
            'bunga' => $this->M_pesanan->Data($iduser),
        ];
        return view('pelanggan/riwayat',$data);
    }
    public function bayar($idpesanan)
    {
        $data =[
            'title' => 'Bayar Pemesanan Anda.',
            'pesan' => $this->M_pesanan->find($idpesanan),
        ];
        return view('pelanggan/bayar',$data);

    }
    public function transaksi()
    {
        $idpesanan = $this->request->getVar('211170_idpesanan');
        $tanggalpembayaran = $this->request->getVar('211170_tanggalpembayaran');
        $metode = $this->request->getVar('211170_metode');

        // Pastikan data yang dibutuhkan tersedia
        if (empty($idpesanan) || empty($tanggalpembayaran) || empty($metode)) {
            return redirect()->to('/pesan')->with('error', 'Data tidak lengkap.');
        }

        // Persiapkan data untuk disimpan
        $data = [
            '211170_idpesanan' => $idpesanan,
            '211170_tanggalpembayaran' => $tanggalpembayaran,
            '211170_metode' => $metode,
        ];

        // Simpan data ke dalam database
        $result = $this->mTransaksi->insert($data);

         // Cek hasil operasi penyimpanan
         if ($result) {
            // Perbarui status pesanan menjadi "Dikirim"
            $updateData = ['211170_statuspesanan' => 'Dikirim'];
            $this->M_pesanan->update($idpesanan, $updateData);

            return redirect()->to('/pesan')->with('success', 'Pembayaran berhasil disimpan.');
        } else {
            return redirect()->to('/pesan')->with('error', 'Gagal menyimpan pembayaran.');
        }
    }
}
