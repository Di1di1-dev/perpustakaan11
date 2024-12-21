<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan Digital')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
            margin-left: 250px; /* Untuk sidebar */
        }
        .sidebar {
            position: fixed;
            width: 250px;
            height: 100%;
            background-color: #2d3e50;
            color: white;
            padding: 15px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px 0;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <h2>Sidebar Debug</h2>
    <p>Ini adalah debugging sidebar.</p>
        <ul>
        @dd(route('data.siswa'))
        <li><a href="{{ route('data.buku') }}">{{ route('data.buku') }}</a></li>
        <li><a href="{{ route('data.siswa') }}">{{ route('data.siswa') }}</a></li>
        <li><a href="{{ route('peminjaman.buku') }}">{{ route('peminjaman.buku') }}</a></li>
        <li><a href="{{ route('pengembalian.buku') }}">{{ route('pengembalian.buku') }}</a></li>
        </ul>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>

@php
    dd('Layout utama dimuat');
@endphp

