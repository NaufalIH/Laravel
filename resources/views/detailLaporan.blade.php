@extends('layout.navbar')  

@section('content')
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
        @foreach ($pengaduan as $p)
            <tr>
                <td>{{ $p->id_pengaduan }}</td>
                <td>{{ $p->tgl_pengaduan }}</td>
                <td>{{ $p->nik }}</td>
                <td>{{ $p->isi_laporan }}</td>
                <td><img style="width: 50px" src="{{ asset("img/$p->foto") }}" alt="{{ $p->foto }}"></td>
                <td>{{ $p->status }}</td>
                <td>
                    <a href="detailLaporan/hapus/{{$p->id_pengaduan}}"><button class="btn btn-danger">Hapus</button></a>
                    <a href="detailLaporan/update/{{$p->id_pengaduan}}"><button type="submit" class="btn btn-primary">Update</button></a>
                    <a href="detailLaporan/detail/{{$p->id_pengaduan}}"><button type="submit" class="btn btn-success">Detail</button></a>      
                </td>
            </tr>
        @endforeach
    </table>
@endsection