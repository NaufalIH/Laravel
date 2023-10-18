<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengaduanController extends Controller
{
    function index() {
        $judul = "WELCOME TO THE HOME";
        $title = "Home";
        return view('home', [
            "textJudul" => $judul,
            "title" => $title
        ]);
    }
//     function detail($id_pengaduan){
//         $title = "Laporan Per Orang";
//         $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id_pengaduan)->first();

//         return view('/laporanPerOrang', [
//             "title" => $title,
//             "pengaduan" => $pengaduan
//         ]);
//    }
//     function update($id){
//         DB::table('pengaduan')
//             ->where('id_pengaduan', $id)
//             ->update(['isi_laporan' => "isi laporan di update"]);
//     }
}

