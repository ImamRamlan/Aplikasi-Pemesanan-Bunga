<?php

namespace App\Controllers;

class berandapelanggan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda Utama'
        ];
        return view('pelanggan/index',$data);
    }
}
