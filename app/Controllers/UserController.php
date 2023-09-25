<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        // ...
    }

    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];

        return view('profile', $data);
    }

    public function create()
    {
        $kelas = [
            [
                'id' => 1,
                'nama_kelas' => 'A',
            ],
            [
                'id' => 2,
                'nama_kelas' => 'B',
            ],
            [
                'id' => 3,
                'nama_kelas' => 'C',
            ],
            [
                'id' => 4,
                'nama_kelas' => 'D',
            ],
        ];

        // session();

        $data = [
            'kelas' => $kelas,
            'validation' => \Config\Services::validation()
        ];
        return view('create_user', $data);
    }

    public function store()
    {
        $userModel = new UserModel();

        if(!$this->validate([
            'nama' => 'required|alpha_space',
            'npm' => 'required|is_unique[user.npm]|integer|min_length[10]',
            // 'kelas' => 'required'
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/user/create')->withInput()->with('validation', $validation);
        }

        $userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'), // Ganti 'id_kelas' dengan 'kelas' sesuai dengan nama field yang benar di tabel Anda
            'npm' => $this->request->getVar('npm'),
        ]);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ];

        return view('profile', $data);
    }
}
