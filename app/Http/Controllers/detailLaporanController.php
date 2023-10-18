<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detailLaporanController extends Controller
{
    function tampilData() {
        $title = "Detail Laporan";
        $pengaduan = DB::table('pengaduan')->get();
            
        return view('/detailLaporan', [
            "title" => $title,
            "pengaduan" => $pengaduan
        ]);
    }

    function hapus($id_pengaduan){
        DB::table('pengaduan')->where('id_pengaduan', $id_pengaduan)->delete();
        return redirect('/detailLaporan');
     }

    function detail($id_pengaduan){
        $title = "Laporan Per Orang";
         $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id_pengaduan)->first();

            return view('/laporaPerOrang', [
                'title' => $title,
                'pengaduan' => $pengaduan
            ]);
     }

     function update($id_pengaduan, Request $request){
        $isi_laporan = $request->isi_laporan;
        $foto = $request->foto;
        $namaFoto = $foto->getClientOriginalName();
        $foto->move('img', $namaFoto);
        
        DB::table('pengaduan')
        ->where('id_pengaduan', $id_pengaduan)
        ->update([
            'isi_laporan' => $isi_laporan,
            'foto' => $namaFoto
        ]);
        return redirect('/detailLaporan');
    }
    
    function tampil_update($id_pengaduan){
        $title = "Update Data";
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id_pengaduan)->first();
        
        return view('/update', [
            "pengaduan" => $pengaduan,
            "title" => $title
        ]);
    }

}