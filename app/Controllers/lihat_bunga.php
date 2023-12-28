<?php

namespace App\Controllers;

use App\Models\M_Bunga;
use App\Models\M_Pesanan;

class Lihat_bunga extends BaseController
{
    protected $mBunga;
    protected $mPesanan;

    public function __construct()
    {
        $this->mBunga = new M_Bunga();
        $this->mPesanan = new M_Pesanan();
    }

    public function index()
    {
        $data = [
            'title' => 'Lihat Bunga',
            'bunga' => $this->mBunga->findAll(),
        ];
        return view('pelanggan/lihat_bunga', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Bunga',
            'bunga' => $this->mBunga->find($id),
        ];
        return view('pelanggan/detailbunga', $data);
    }

    public function pesan($id)
    {
        $data['bunga'] = $this->mBunga->find($id);

        // Ambil stok bunga
        $stokBunga = $data['bunga']['211170_stok'];

        // Jika stok habis, redirect ke halaman sebelumnya
        if ($stokBunga <= 0) {
            session()->setFlashdata('error', 'Stok bunga habis. Tidak dapat melakukan pesanan.');
            return redirect()->back();
        }

        $data['title'] = 'Pesan Bunga';
        return view('pelanggan/pesan', $data);
    }

    public function bayar()
    {
        $idBunga = $this->request->getPost('211170_idbunga');
        $idPelanggan = $this->request->getPost('211170_idpelanggan');
        $nominal = $this->request->getPost('211170_jumlah');
        $bunga = $this->mBunga->find($idBunga);

        // Validasi jika nominal pesanan melebihi stok bunga
        if ($nominal > $bunga['211170_stok']) {
            session()->setFlashdata('error', 'Jumlah pesanan melebihi stok bunga yang tersedia.');
            return redirect()->to("/lihat_bunga/pesan/{$idBunga}");
        }

        // Kurangi stok bunga
        $newStok = max(0, $bunga['211170_stok'] - $nominal);
        $this->mBunga->update($idBunga, ['211170_stok' => $newStok]);

        $totalHarga = $nominal * $bunga['211170_hargasatuan'];

        $pesananData = [
            '211170_tanggalpesanan' => date('Y-m-d H:i:s'),
            '211170_idpelanggan' => $idPelanggan,
            '211170_idbunga' => $idBunga,
            '211170_statuspesanan' => 'Dalam Proses',
            '211170_jumlah' => $nominal,
            '211170_totalharga' => $totalHarga,
        ];

        $this->mPesanan->insert($pesananData);

        session()->setFlashdata('success', 'Data berhasil disimpan');

        return redirect()->to("/lihat_bunga");
    }
}
