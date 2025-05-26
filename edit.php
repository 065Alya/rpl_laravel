<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM barang WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Barang</title>
  <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h2>Edit Barang</h2>
  <form method="POST" action="update.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <div class="mb-3">
      <label>Kode</label>
      <input type="text" name="kode" class="form-control" value="<?= $data['kode'] ?>">
    </div>
    <div class="mb-3">
      <label>Nama Barang</label>
      <input type="text" name="nama_barang" class="form-control" value="<?= $data['nama_barang'] ?>">
    </div>
    <div class="mb-3">
      <label>Deskripsi</label>
      <textarea name="deskripsi" class="form-control"><?= $data['deskripsi'] ?></textarea>
    </div>
    <div class="mb-3">
      <label>Harga Satuan</label>
      <input type="number" name="harga_satuan" class="form-control" value="<?= $data['harga_satuan'] ?>">
    </div>
    <div class="mb-3">
      <label>Jumlah</label>
      <input type="number" name="jumlah" class="form-control" value="<?= $data['jumlah'] ?>">
    </div>
    <div class="mb-3">
      <label>Ganti Foto</label>
      <input type="file" name="foto" class="form-control">
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </form>
</body>
</html>