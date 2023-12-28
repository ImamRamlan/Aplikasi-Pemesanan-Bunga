<?php

namespace App\Controllers;

use App\Models\m_auth;

class loginpelanggan extends BaseController
{
	protected $m_auth;

	public function __construct()
	{
		$this->m_auth = new m_auth();
	}

	public function index()
	{
		return view('pelanggan/login');
	}

	public function log()
	{
		$id = $this->request->getPost('211170_idpelanggan');
		$username = $this->request->getPost('211170_username');
		$password = $this->request->getPost('211170_katasandi');
		$nama = $this->request->getPost('211170_namapelanggan');

		$cek_admin = $this->m_auth->auth_pelanggan($username, $password, $nama,$id);

		if ($cek_admin) {
			session()->set([
				'log' => true,
				'id' => $cek_admin['211170_idpelanggan'],
				'username' => $cek_admin['211170_username'],
				'password' => $cek_admin['211170_katasandi'],
				'nama' => $cek_admin['211170_namapelanggan']
			]);
			return redirect()->to('/berandapelanggan');
		} else {
			session()->setFlashdata('gagal', 'Login Gagal');
			session()->setFlashdata('salah', 'username atau Password salah ');
			return redirect()->to('/loginpelanggan');
		}
	}

	public function logout()
	{
		session()->remove('log');
		session()->remove('id');
		session()->remove('username');
		session()->remove('password');
		session()->remove('nama');
		return redirect()->to('/loginpelanggan');
	}
}
