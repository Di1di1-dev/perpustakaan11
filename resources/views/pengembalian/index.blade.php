@extends('layouts.app')

@section('content')
    <h1>Data Pengembalian Buku</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Judul Buku</th>
                <th>Tanggal Pengembalian</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengembalians as $pengembalian)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pengembalian->peminjaman->siswa->nama }}</td>
                    <td>{{ $pengembalian->peminjaman->buku->judul }}</td>
                    <td>{{ $pengembalian->tanggal_kembali }}</td>
                    <td>{{ $pengembalian->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
