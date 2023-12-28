<?php

namespace App\Controllers;

class laporan extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Generate Laporan'
        ];
        return view('admin/laporan',$data);
    }
}
