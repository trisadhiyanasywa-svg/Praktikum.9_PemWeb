<?php
// Memanggil file koneksi
include "db/koneksi.php"; 

if (isset($_POST['submit'])) {
    // Sesuai koneksi.php kamu, kita pakai variabel $conn
    $nama         = mysqli_real_escape_string($conn, $_POST['nama']);
    $tahun_lulus  = mysqli_real_escape_string($conn, $_POST['tahun_lulus']);
    $idlevel      = mysqli_real_escape_string($conn, $_POST['idlevel']);
    $keterangan   = mysqli_real_escape_string($conn, $_POST['keterangan']);
    
    // Proses upload foto
    $foto_sekolah = $_FILES['foto_sekolah']['name'];
    $tmp          = $_FILES['foto_sekolah']['tmp_name'];

    if (!empty($foto_sekolah)) {
        $path = "assets/images/sekolah/" . $foto_sekolah;
        move_uploaded_file($tmp, $path);
        $query = "INSERT INTO studies (nama, idlevel, keterangan, tahun_lulus, foto_sekolah) 
                  VALUES ('$nama', '$idlevel', '$keterangan', '$tahun_lulus', '$foto_sekolah')";
    } else {
        $query = "INSERT INTO studies (nama, idlevel, keterangan, tahun_lulus) 
                  VALUES ('$nama', '$idlevel', '$keterangan', '$tahun_lulus')";
    }

    // Eksekusi query menggunakan $conn
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data Berhasil Disimpan!'); window.location='index.php?page=studies_kerjakan';</script>";
    } else {
        echo "<script>alert('Gagal Simpan: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<div class="card shadow border-0" style="border-radius: 15px; overflow: hidden; background: #ffffff;">
    <div style="height: 5px; background: #fd7e14;"></div>
    <div class="card-header py-4" style="background-color: #0d2137;">
        <div class="d-flex align-items-center">
            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                <i class="bi bi-mortarboard-fill text-dark fs-4"></i>
            </div>
            <h5 class="mb-0 fw-bold text-white">TAMBAH RIWAYAT PENDIDIKAN</h5>
        </div>
    </div>

    <div class="card-body p-4">
        <form action="index.php?page=tambah_studies" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Instansi</label>
                <input type="text" name="nama" class="form-control" required placeholder="Contoh: SDN Srengseng Sawah">
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Tahun Lulus</label>
                    <input type="number" name="tahun_lulus" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Jenjang Pendidikan</label>
                    <select name="idlevel" class="form-select" required>
                        <option value="" disabled selected>Pilih...</option>
                        <option value="1">SD</option>
                        <option value="2">SMP</option>
                        <option value="3">SMA/SMK</option>
                        <option value="4">Kuliah</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Foto Sekolah (Opsional)</label>
                <input type="file" name="foto_sekolah" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Keterangan</label>
                <textarea name="keterangan" class="form-control" rows="3" placeholder="Ceritakan pengalaman singkat..."></textarea>
            </div>
            <div class="d-flex justify-content-end gap-2">
                <a href="index.php?page=studies_kerjakan" class="btn btn-light border px-4">Batal</a>
                <button type="submit" name="submit" class="btn btn-primary px-4">Simpan Data</button>
            </div>
        </form>
    </div>
</div>