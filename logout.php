<?php
// Memulai session agar bisa menghapus data yang ada
session_start();

// Menghapus semua data session yang tersimpan (username, status, role)
session_destroy();

// Menampilkan pesan sukses dan mengarahkan kembali ke halaman home
echo "<script>
    alert('Anda telah berhasil logout.');
    window.location='index.php?page=home';
</script>";
?>