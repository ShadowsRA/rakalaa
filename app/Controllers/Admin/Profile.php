<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PegawaiModel;

class Profile extends BaseController
{
    public function index()
    {
        $pegawaiModel = new PegawaiModel();
        $data = [
            'title' => 'Profile',
            'pegawai' => $pegawaiModel->findAll(),
        ];
        return view('admin/profile/profile', $data);
    }
}
