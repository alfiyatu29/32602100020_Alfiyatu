<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class FormController extends BaseController
{
    public function submitForm(){
        // Mengambil Data yang Dikirim melalui Form
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matakuliah = $this->request->getPost('matakuliah');
        $dosen = $this->request->getPost('dosen');
        $asisten = $this->request->getPost('asisten');

        // Menyiapkan Data yang akan Dikirim ke View
        $data = [
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'matakuliah' => $matakuliah,
            'dosen' => $dosen,
            'asisten' => $asisten,
        ];

        // Menampilkan view dengan data yang telah disiapkan
        return view('form_result', $data);
    }
}