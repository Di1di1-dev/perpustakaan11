<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::with(['buku', 'siswa'])->get(); // Mengambil data peminjaman dengan relasi
        return view('peminjaman.index', compact('peminjamans')); // Mengirim data ke view
    }
}
