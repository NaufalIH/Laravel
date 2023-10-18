@extends('layout.link')

<link rel="stylesheet" href="/css/home.css">
<h1 class="mt-5 text-center">Update</h1>
<div class="container register">

      <form method="POST" enctype="multipart/form-data" action="" class="container mt-3">
        @csrf
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label" style="color: white;">Isi Laporan</label>
          <input type="text" class="form-control" name="isi_laporan" id="exampleInputPassword1" value="{{ $pengaduan->isi_laporan }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label" style="color: white;">Foto</label>
          <label for="formFile" class="form-label">Bukti foto</label>
      <input class="form-control" type="file" name="foto" id="formFile">
    </div>
        </div>
        <center><button type="submit" name="submit" class="btn btn-primary">Update</button></center>
      </form>
</div>

