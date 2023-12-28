<?php

namespace App\Controllers;
use App\Models\m_pelanggan;
class registrasi extends BaseController
{
    protected $mPelanggan;

    public function __construct()
    {
        $this->mPelanggan = new m_pelanggan();
    }
    public function index(): string
    {
        return view('pelanggan/registrasi');
    }
    public function save()
    {
        // Validate incoming data
        $validationRules = [
            '211170_namapelanggan' => 'required',
            '211170_username' => [
                'rules' =>'required|is_unique[tbl_pelanggan_211170.211170_username]',
                'errors' => [
                    'required' => 'Username  Wajib Diisi',
                    'is_unique' => 'Username sudah terdaftar'
                ]
            ],
            '211170_katasandi' => 'required',
            '211170_notelp' => 'required',
            '211170_alamat' => 'required',
        ];

        if ($this->validate($validationRules)) {
            // If validation passes, insert data into the database
            $data = [
                '211170_namapelanggan' => $this->request->getPost('211170_namapelanggan'),
                '211170_username' => $this->request->getPost('211170_username'),
                '211170_katasandi' => $this->request->getPost('211170_katasandi'),
                '211170_notelp' => $this->request->getPost('211170_notelp'),
                '211170_alamat' => $this->request->getPost('211170_alamat'),
            ];

            $this->mPelanggan->insert($data);

            return redirect()->to(base_url('registrasi'))->with('success', 'Akun anda berhasil registrasi.');
        } else {
            // If validation fails, redirect back to the form with errors
            return redirect()->to(base_url('registrasi'))->withInput()->with('validation', $this->validator);
        }
    }
}
