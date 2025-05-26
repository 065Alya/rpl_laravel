<?php
include 'koneksi.php';

// Ambil data dari form
$kode = $_POST['kode'];
$nama = $_POST['nama_barang'];
$desc = $_POST['deskripsi'];
$harga = $_POST['harga_satuan'];
$jumlah = $_POST['jumlah'];
$foto = '';

// Proses upload foto jika ada
if ($_FILES['foto']['name'] != '') {
  $foto = time() . '_' . $_FILES['foto']['name'];
  move_uploaded_file($_FILES['foto']['tmp_name'], 'uploads/' . $foto);
}

// Simpan data ke database
$sql = "INSERT INTO barang (kode, nama_barang, deskripsi, harga_satuan, jumlah, foto)
        VALUES ('$kode', '$nama', '$desc', '$harga', '$jumlah', '$foto')";
$conn->query($sql);

// Kembali ke halaman utama
header("Location: index.php");
?>