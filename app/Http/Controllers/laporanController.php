<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class laporanController extends Controller
{
    function laporan() {
            $title = "Laporan";
            return view('laporan', [
                "title" => $title
            ]);
    }

    function proses_tambah_pengaduan(Request $request) {

        // mengambil nama foto
        // dd($request->all());

        // validasi
        $request->validate([
            'isi_laporan' => 'required',
            'foto' => 'required'
        ]);

        // untuk menyinpan foto ke dalam storage/public/image
        $foto = $request->foto;
        $namaFoto = $foto->getClientOriginalName();
        $foto->move('img', $namaFoto);

        $isi_laporan = $request->isi_laporan;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => '039151',
            'isi_laporan' => $isi_laporan,
            'foto' => $namaFoto,
            'status' => 'proses',
        ]);
        return redirect('/detailLaporan');
    }
}
