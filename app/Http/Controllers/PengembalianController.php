<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalian;

class PengembalianController extends Controller
{
    public function index()
    {
        $pengembalians = Pengembalian::with('peminjaman')->get(); // Mengambil data pengembalian dengan relasi
        return view('pengembalian.index', compact('pengembalians')); // Mengirim data ke view
    }
}
