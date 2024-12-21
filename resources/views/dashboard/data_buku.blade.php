@extends('dashboard.index')

@section('content')
<div class="card">
    <h2>Data Buku</h2>
    <table border="1" width="100%" style="border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataBuku as $buku)
                <tr>
                    <td>{{ $buku['judul'] }}</td>
                    <td>{{ $buku['pengarang'] }}</td>
                    <td>{{ $buku['tahun'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
