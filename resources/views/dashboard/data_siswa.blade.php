@extends('dashboard.index')

@section('content')
<div class="card">
    <h2>Data Siswa</h2>
    <table border="1" width="100%" style="border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataSiswa as $siswa)
                <tr>
                    <td>{{ $siswa['nama'] }}</td>
                    <td>{{ $siswa['kelas'] }}</td>
                    <td>{{ $siswa['jurusan'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
