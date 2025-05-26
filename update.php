<?php
include 'koneksi.php';

$id = $_POST['id'];
$kode = $_POST['kode'];
$nama = $_POST['nama_barang'];
$desc = $_POST['deskripsi'];
$harga = $_POST['harga_satuan'];
$jumlah = $_POST['jumlah'];

// Jika ada foto baru diupload
if ($_FILES['foto']['name'] != '') {
  $foto = time() . '_' . $_FILES['foto']['name'];
  move_uploaded_file($_FILES['foto']['tmp_name'], 'uploads/' . $foto);
  $sql = "UPDATE barang SET kode='$kode', nama_barang='$nama', deskripsi='$desc',
          harga_satuan='$harga', jumlah='$jumlah', foto='$foto' WHERE id=$id";
} else {
  $sql = "UPDATE barang SET kode='$kode', nama_barang='$nama', deskripsi='$desc',
          harga_satuan='$harga', jumlah='$jumlah' WHERE id=$id";
}

$conn->query($sql);
header("Location: index.php");
?>