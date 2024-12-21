<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all(); // Mengambil semua data buku dari database
        return view('buku.index', compact('bukus')); // Mengirim data ke view
    }
}
