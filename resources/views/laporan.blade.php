@include('layout.navbar')

<div class="container">
  <form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Pengaduan</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="isi_laporan" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Bukti foto</label>
      <input class="form-control" type="file" name="foto" id="formFile">
    </div>
    <button class="btn btn-success p-2" type="submit" name="submit">Lapor</button>
  </form>
</div>
