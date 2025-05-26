<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Daftar Barang</title>
  <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h2>Daftar Barang</h2>
  <a href="tambah.php" class="btn btn-primary mb-3">Tambah Barang</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode</th><th>Nama</th><th>Harga</th><th>Jumlah</th><th>Foto</th><th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // Ambil data dari database
        $result = $conn->query("SELECT * FROM barang");
        while ($row = $result->fetch_assoc()):
      ?>
      <tr>
        <td><?= $row['kode'] ?></td>
        <td><?= $row['nama_barang'] ?></td>
        <td>Rp <?= number_format($row['harga_satuan'], 0) ?></td>
        <td><?= $row['jumlah'] ?></td>
        <td>
          <?php if ($row['foto']): ?>
            <img src="uploads/<?= $row['foto'] ?>" width="80">
          <?php endif; ?>
        </td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</body>
</html>