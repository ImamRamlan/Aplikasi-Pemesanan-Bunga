<?php

namespace App\Controllers;
use App\Models\m_login;
class loginadmin extends BaseController
{
	protected $m_login;
    public function __construct() {
        $this->m_login = new m_login;
    }
    public function index()
    {
        if(session()->get('log') == true){
            return redirect()->to('/admin');
        }
        return view('loginadmin/login');
    }
    public function log()
	{
		$username 	= $this->request->getPost('211170_username');
		$password 	= $this->request->getPost('211170_katasandi');
		// var_dump($username, $password);

		$cek_admin	= $this->m_login->auth_admin($username,$password);

		// if($cek_admin->getNumRows() > 0){ //jika login sebagai petugas
			// $data = $cek_admin->getRowArray();
		if($cek_admin) {
			if($cek_admin['211170_level'] == 'Admin'){ //Akses admin
				session()->set('akses', '1');
				session()->set('log', true);
				session()->set('username', $cek_admin['211170_username']);
				session()->set('password', $cek_admin['211170_katasandi']);
				session()->set('level', $cek_admin['211170_level']);
				return redirect()->to('/admin');

			} else { //akses petugas
				session()->set('akses', '2');
				session()->set('log', true);
				session()->set('username', $cek_admin['211170_username']);
				session()->set('password', $cek_admin['211170_katasandi']);
				session()->set('level', $cek_admin['211170_level']);
				return redirect()->to('/admin');
			}} else {
				session()->setFlashdata('gagal','Login Gagal');
				session()->setFlashdata('salah','Username atau Password salah ');
				return redirect()->to('/loginadmin');
			}
	}
    public function logout()
	{
		session()->remove('log');
		session()->remove('akses');
		session()->remove('211170_username');
		session()->remove('211170_katasandi');
		return redirect()->to('/loginadmin');
	}
}
