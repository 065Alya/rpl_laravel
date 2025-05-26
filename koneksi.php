<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "crud_barang";

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>