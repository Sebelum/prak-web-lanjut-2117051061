<?php

namespace App\Controllers;
use App\Models\KelasModel;

use App\Controllers\BaseController;

class KelasController extends BaseController
{
    public $kelasModel;

    public function __construct()
    {
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Kelas',
            'kelas' => $this->kelasModel->getKelas()
        ];

        return view('list_kelas', $data);    
    }

    public function create()
    {

        $data = [
            'title' => 'Create Kelas',
            'validation' => \Config\Services::validation()
        ];

        return view('create_kelas', $data);
    }


    public function store(){

        if (!$this->validate([
            'nama_kelas' => 'required|alpha_space',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kelas/create')->withInput()->with('validation', $validation);
        }

        $this->userModel->saveUser([
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ]);


        return redirect()->to('/kelas');

    }
    public function edit($id){

        $kelas = $this->kelasModel->getKelas($id);

        $data = [
            'title' => 'Edit Kelas',
            'kelas' => $kelas
        ];

        return view('edit_kelas', $data);

    }

    public function update($id){

        $origin_kelas = $this->kelasModel->getKelas($id);

        $is_unique = '|is_unique[kelas.nama_kelas]';

        if(!$this->validate([
            'nama_kelas' => 'required'.$is_unique,
        ])){
            return redirect()->back()->withInput();
        }

        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ];
        
        $result = $this->kelasModel->updateKelas($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal Menyimpan Data!');
        }

        return redirect()->to('/kelas');

    }

    public function destroy($id){

        $result = $this->kelasModel->deleteKelas($id);

        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }

        return redirect()->to(base_url('/kelas'))->with('success', 'Berhasil menghapus data');

    }
}
