<?php
session_start();
include "db/koneksi.php"; 

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        // Ambil data hasil query untuk mendapatkan kolom 'role'
        $data = mysqli_fetch_assoc($query); 
        
        $_SESSION['status'] = "login";
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role']; // Baris ini yang akan memperbaiki error di Navbar!
        
        echo "<script>alert('Login Berhasil!'); window.location='index.php?page=home';</script>";
    } else {
        echo "<script>alert('Gagal! Username atau Password salah.'); window.location='index.php?page=login';</script>";
    }
}
?>