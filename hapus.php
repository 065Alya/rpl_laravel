<?php
include 'koneksi.php';
// Ambil ID barang
$id = $_GET['id'];
// Hapus data
$conn->query("DELETE FROM barang WHERE id=$id");
header("Location: index.php");
?>