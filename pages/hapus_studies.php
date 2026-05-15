<?php
include "db/koneksi.php";
$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM studies WHERE id = '$id'");

if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php?page=studies_kerjakan';</script>";
} else {
    echo "<script>alert('Gagal menghapus data'); window.location='index.php?page=studies_kerjakan';</script>";
}
?>