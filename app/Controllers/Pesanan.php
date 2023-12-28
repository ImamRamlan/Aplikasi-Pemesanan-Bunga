<?php

namespace App\Controllers;

use App\Models\m_pesanan;
use App\Models\m_pelanggan;

class Pesanan extends BaseController
{
    protected $mPesanan;
    protected $mPelanggan;

    public function __construct()
    {
        $this->mPesanan = new M_Pesanan();
        $this->mPelanggan = new m_pelanggan();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pesanan',
            'pesanan' => $this->mPesanan->tes(),
        ];

        return view('admin/pesanan/index', $data);
    }
    public function delete($id)
    {
        $this->mPesanan->delete($id);

        return redirect()->to('/pesanan')->with('success', 'Data Pesanan berhasil dihapus');
    }
    public function updateStatus($idPesanan, $status)
    {
        // Validasi status agar hanya "Dalam Proses," "Dikirim," atau "Selesai"
        $allowedStatus = ['Dalam Proses', 'Dikirim', 'Selesai'];

        if (!in_array($status, $allowedStatus)) {
            return redirect()->back()->with('error', 'Status pesanan tidak valid.');
        }

        // Update status pesanan di model
        $pesanModel = new m_pesanan();
        $pesanModel->updateStatusPesanan($idPesanan, $status);

        return redirect()->back()->with('success', 'Status pesanan berhasil diperbarui.');
    }
}
