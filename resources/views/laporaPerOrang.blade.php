@extends('layout.navbar')

@section('content')
    <link rel="stylesheet" href="/css/home.css">
    <table class="table table-dark table-hover">
        <tr>
            <th>ID Pengaduan</th>
            <th>Tanggal Pengaduan</th>
            <th>NIK</th>
            <th>Isi Laporan</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
            <tr>
                <td>{{ $pengaduan->id_pengaduan }}</td>
                <td>{{ $pengaduan->tgl_pengaduan }}</td>
                <td>{{ $pengaduan->nik }}</td>
                <td>{{ $pengaduan->isi_laporan }}</td>
                <td>{{ $pengaduan->foto }}</td>
                <td>{{ $pengaduan->status }}</td>
                <td>
                    <button class="btn btn-primary" onclick="window.print()">Print</button>
                </td>
            </tr>
    </table>
@endsection
