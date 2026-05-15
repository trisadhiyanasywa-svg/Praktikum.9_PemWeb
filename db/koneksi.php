<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_portofolio"; // <-- PASTIKAN ini nama database kamu di phpMyAdmin

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>