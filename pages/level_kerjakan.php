<?php
include "db/koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM level ORDER BY id ASC");
?>

<div class="card shadow-sm border-0" style="border-radius: 15px; overflow: hidden; background: #ffffff; border: 1px solid #dee2e6 !important;">
    <!-- Header Tanpa Tombol Tambah -->
    <div class="card-header py-4" style="background-color: #0d2137; border-bottom: 3px solid #a9b5ba;">
        <div class="d-flex align-items-center">
            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                <i class="bi bi-layers-half text-dark fs-5"></i>
            </div>
            <div>
                <h5 class="mb-0 fw-bold text-white">DATA LEVEL PENDIDIKAN</h5>
                <small class="text-white-50">Daftar jenjang pendidikan sebagai referensi sistem</small>
            </div>
        </div>
    </div>

    <div class="card-body p-4">
        <!-- Tabel dengan garis pembatas yang rapih -->
        <div class="table-responsive">
            <table class="table table-hover table-striped align-middle" style="border: 1px solid #dee2e6;">
                <thead style="background-color: #f8f9fa;">
                    <tr>
                        <th class="text-center py-3" style="width: 80px; border-bottom: 2px solid #dee2e6;">NO</th>
                        <th class="py-3" style="border-bottom: 2px solid #dee2e6;">NAMA JENJANG PENDIDIKAN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while($row = mysqli_fetch_array($query)) { 
                    ?>
                        <tr>
                            <td class="text-center fw-bold text-muted" style="border-right: 1px solid #dee2e6;">
                                <?= $no++; ?>
                            </td>
                            <td class="ps-4 fw-bold" style="color: #0d2137; letter-spacing: 1px;">
                                <?= $row['nama']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Informasi Tambahan -->
        <div class="mt-4 p-3 rounded-3" style="background-color: #fff4e6; border-left: 5px solid #fd7e14;">
            <small class="text-muted">
                <i class="bi bi-info-circle-fill me-2 text-warning"></i>
                Data ini adalah <strong>Master Data</strong> statis. Untuk mengelola riwayat pendidikan pribadi Anda, silakan menuju menu <strong>Studies (CRUD)</strong>.
            </small>
        </div>
    </div>
</div>

<style>
    /* Menghilangkan efek border double pada tabel bootstrap */
    .table {
        margin-bottom: 0;
    }
    
    /* Memberikan warna highlight yang lembut saat baris disentuh kursor */
    .table-hover tbody tr:hover {
        background-color: rgba(0, 173, 239, 0.05) !important;
        transition: 0.2s;
    }
</style>