<?php

namespace App\Controllers;

use App\Models\m_bunga;

class Bunga extends BaseController
{
    protected $mBunga;

    public function __construct()
    {
        $this->mBunga = new M_Bunga();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Bunga',
            'bunga' => $this->mBunga->findAll(),
        ];

        return view('admin/bunga/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Bunga',
        ];

        return view('admin/bunga/create', $data);
    }

    public function store()
    {
        // Validation rules
        $validationRules = [
            'namabunga' => 'required',
            'deskripsi' => 'required',
            'hargasatuan' => 'required',
            'stok' => 'required',
            'gambar' => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to('/bunga/create')->withInput()->with('validation', $this->validator);
        }

        // Handle image upload
        $gambar = $this->request->getFile('gambar');
        $gambarName = $gambar->getRandomName();
        $gambar->move('uploads/bunga', $gambarName);

        $data = [
            '211170_namabunga' => $this->request->getPost('namabunga'),
            '211170_deskripsi' => $this->request->getPost('deskripsi'),
            '211170_hargasatuan' => $this->request->getPost('hargasatuan'),
            '211170_stok' => $this->request->getPost('stok'),
            '211170_gambar' => $gambarName,
        ];

        $this->mBunga->insert($data);

        return redirect()->to('/bunga')->with('success', 'Data Bunga berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Bunga',
            'bunga' => $this->mBunga->find($id),
        ];

        return view('admin/bunga/edit', $data);
    }

    public function update($id)
    {
        // Validation rules
        $validationRules = [
            'namabunga' => 'required',
            'deskripsi' => 'required',
            'hargasatuan' => 'required',
            'stok' => 'required',
            'gambar' => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to("/bunga/edit/$id")->withInput()->with('validation', $this->validator);
        }

        $existingData = $this->mBunga->find($id);

        // Handle image upload
        $gambar = $this->request->getFile('gambar');

        if ($gambar->isValid() && !$gambar->hasMoved()) {
            // Delete the old image
            unlink('uploads/bunga/' . $existingData['211170_gambar']);

            // Move the new image
            $gambarName = $gambar->getRandomName();
            $gambar->move('uploads/bunga', $gambarName);
        } else {
            // If no new image is uploaded, use the existing image
            $gambarName = $existingData['211170_gambar'];
        }

        $data = [
            '211170_namabunga' => $this->request->getPost('namabunga'),
            '211170_deskripsi' => $this->request->getPost('deskripsi'),
            '211170_hargasatuan' => $this->request->getPost('hargasatuan'),
            '211170_stok' => $this->request->getPost('stok'),
            '211170_gambar' => $gambarName,
        ];

        $this->mBunga->update($id, $data);

        return redirect()->to('/bunga')->with('success', 'Data Bunga berhasil diupdate');
    }


    public function delete($id)
    {
        $this->mBunga->delete($id);

        return redirect()->to('/bunga')->with('success', 'Data Bunga berhasil dihapus');
    }
}
