<?php
include "db/koneksi.php";

// 1. AMBIL DATA LAMA BERDASARKAN ID
$id = $_GET['id'];
$query_ambil = mysqli_query($conn, "SELECT * FROM studies WHERE id = '$id'");
$data = mysqli_fetch_array($query_ambil);

// 2. LOGIKA UPDATE DATA (Jalan saat tombol update diklik)
if (isset($_POST['update'])) {
    $nama         = mysqli_real_escape_string($conn, $_POST['nama']);
    $tahun_lulus  = mysqli_real_escape_string($conn, $_POST['tahun_lulus']);
    $idlevel      = mysqli_real_escape_string($conn, $_POST['idlevel']);
    $keterangan   = mysqli_real_escape_string($conn, $_POST['keterangan']);
    
    $foto_baru    = $_FILES['foto_sekolah']['name'];
    $tmp          = $_FILES['foto_sekolah']['tmp_name'];

    if (!empty($foto_baru)) {
        // Jika user mengunggah foto baru
        $path = "assets/images/sekolah/" . $foto_baru;
        move_uploaded_file($tmp, $path);
        $query_update = "UPDATE studies SET nama='$nama', idlevel='$idlevel', keterangan='$keterangan', tahun_lulus='$tahun_lulus', foto_sekolah='$foto_baru' WHERE id='$id'";
    } else {
        // Jika user tidak mengganti foto
        $query_update = "UPDATE studies SET nama='$nama', idlevel='$idlevel', keterangan='$keterangan', tahun_lulus='$tahun_lulus' WHERE id='$id'";
    }

    if (mysqli_query($conn, $query_update)) {
        echo "<script>alert('Data Berhasil Diperbarui!'); window.location='index.php?page=studies_kerjakan';</script>";
    } else {
        echo "<script>alert('Gagal Update: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<div class="card shadow border-0" style="border-radius: 15px; overflow: hidden; background: #ffffff;">
    <div style="height: 5px; background: #2c60ce;"></div>
    <div class="card-header py-4" style="background-color: #0d2137;">
        <h5 class="mb-0 fw-bold text-white text-uppercase">Edit Riwayat Pendidikan</h5>
    </div>
    <div class="card-body p-4">
        <form action="index.php?page=edit_studies&id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Instansi</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Tahun Lulus</label>
                    <input type="number" name="tahun_lulus" class="form-control" value="<?php echo $data['tahun_lulus']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Jenjang Pendidikan</label>
                    <select name="idlevel" class="form-select" required>
                        <option value="" disabled>Pilih Jenjang...</option>
                        <?php
                        // Mengambil data level secara dinamis dari database agar TK muncul
                        $query_level = mysqli_query($conn, "SELECT * FROM level ORDER BY id ASC");
                        while($row_l = mysqli_fetch_array($query_level)) {
                            // Menandai jenjang yang sedang diedit agar otomatis terpilih
                            $selected = ($data['idlevel'] == $row_l['id']) ? "selected" : "";
                            echo "<option value='".$row_l['id']."' $selected>".$row_l['nama']."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Foto Saat Ini</label><br>
                <?php if(!empty($data['foto_sekolah'])): ?>
                    <img src="assets/images/sekolah/<?php echo $data['foto_sekolah']; ?>" width="120" class="mb-2 rounded shadow-sm border">
                <?php else: ?>
                    <p class="text-muted small">Belum ada foto</p>
                <?php endif; ?>
                <input type="file" name="foto_sekolah" class="form-control mt-2">
                <small class="text-muted">*Kosongkan jika tidak ingin mengganti foto</small>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Keterangan</label>
                <textarea name="keterangan" class="form-control" rows="3"><?php echo $data['keterangan']; ?></textarea>
            </div>

            <div class="d-flex justify-content-end gap-2 mt-4">
                <a href="index.php?page=studies_kerjakan" class="btn btn-light border px-4 fw-bold">Batal</a>
                <button type="submit" name="update" class="btn btn-primary px-4 fw-bold">Update Data</button>
            </div>
        </form>
    </div>
</div>