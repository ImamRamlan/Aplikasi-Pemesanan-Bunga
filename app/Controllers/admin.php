<?php

namespace App\Controllers;

use App\Models\m_pegawai;

class Admin extends BaseController
{
    protected $m_pegawai;

    public function __construct()
    {
        $this->m_pegawai = new m_pegawai();
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda Utama'
        ];
        return view('admin/index', $data);
    }

    public function pegawai()
    {
        $data = [
            'title' => 'Data Pegawai',
            'datapegawai' => $this->m_pegawai->getData()
        ];
        return view('admin/pegawai/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Buat Data Pegawai'
        ];
        return view('admin/pegawai/create', $data);
    }

    public function save()
    {
        $username = $this->request->getVar('username');
        $katasandi = $this->request->getVar('katasandi');
        $level = $this->request->getVar('level');

        $this->m_pegawai->insertData($username, $katasandi, $level);

        return redirect()->to('/admin/pegawai');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Pegawai',
            'pegawai' => $this->m_pegawai->find($id),
        ];

        return view('admin/pegawai/edit', $data);
    }

    public function update($id)
    {
        $username = $this->request->getPost('username');
        $katasandi = $this->request->getPost('katasandi');
        $level = $this->request->getPost('level');

        $this->m_pegawai->updateData($id, $username, $katasandi, $level);

        return redirect()->to('/admin/pegawai')->with('success', 'Data Pegawai berhasil diupdate');
    }

    public function delete($id)
    {
        $this->m_pegawai->delete($id);

        return redirect()->to('/admin/pegawai')->with('success', 'Data Pegawai berhasil dihapus');
    }
}
