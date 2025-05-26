<!DOCTYPE html>
<html>
<head>
  <title>Tambah Barang</title>
  <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h2>Tambah Barang</h2>
  <form method="POST" action="simpan.php" enctype="multipart/form-data">
    <!-- Input data barang -->
    <div class="mb-3">
      <label>Kode</label>
      <input type="text" name="kode" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Nama Barang</label>
      <input type="text" name="nama_barang" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Deskripsi</label>
      <textarea name="deskripsi" class="form-control"></textarea>
    </div>
    <div class="mb-3">
      <label>Harga Satuan</label>
      <input type="number" name="harga_satuan" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Jumlah</label>
      <input type="number" name="jumlah" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Foto Barang</label>
      <input type="file" name="foto" class="form-control">
    </div>
    <button class="btn btn-success">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </form>
</body>
</html>