<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function dataBuku()
    {
        // Contoh data buku
        $dataBuku = [
            ['judul' => 'Belajar Laravel', 'pengarang' => 'John Doe', 'tahun' => 2023],
            ['judul' => 'Pemrograman PHP', 'pengarang' => 'Jane Smith', 'tahun' => 2022],
        ];

        return view('dashboard.data_buku', compact('dataBuku'));
    }

    public function dataSiswa()
    {
        // Contoh data siswa
        $dataSiswa = [
            ['nama' => 'Budi', 'kelas' => '10A', 'jurusan' => 'IPA'],
            ['nama' => 'Siti', 'kelas' => '11B', 'jurusan' => 'IPS'],
        ];

        return view('dashboard.data_siswa', compact('dataSiswa'));
    }

}
