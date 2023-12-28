<?php

namespace App\Controllers;

use App\Models\m_pelanggan;

class Datauser extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data User'
        ];
        $model = new m_pelanggan();
        $data['pelanggan'] = $model->getPelanggan();
        return view('admin/datauser/index', $data);
    }

    public function edit($id)
    {
        $model = new m_pelanggan();
        $data['pelanggan'] = $model->getPelangganById($id);

        if (empty($data['pelanggan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the Pelanggan with ID: ' . $id);
        }

        $data['title'] = 'Edit Data User';
        return view('admin/datauser/edit', $data);
    }

    public function update($id)
    {
        $model = new m_pelanggan();
        $data = [
            '211170_namapelanggan' => $this->request->getPost('namapelanggan'),
            '211170_username' => $this->request->getPost('username'),
            '211170_katasandi' => $this->request->getPost('katasandi'),
            '211170_notelp' => $this->request->getPost('notelp'),
            '211170_alamat' => $this->request->getPost('alamat'),
        ];

        $model->updatePelanggan($id, $data);

        return redirect()->to('/datauser')->with('success', 'Data User berhasil diupdate');
    }

    public function delete($id)
    {
        $model = new m_pelanggan();
        $model->deletePelanggan($id);

        return redirect()->to('/datauser')->with('success', 'Data User berhasil dihapus');
    }
}
