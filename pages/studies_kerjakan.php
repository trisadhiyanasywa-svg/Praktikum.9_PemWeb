<?php
include "db/koneksi.php";
// Mengambil data dengan urutan level dari database
$query = mysqli_query($conn, "SELECT * FROM studies ORDER BY idlevel ASC");
?>

<div class="card shadow-sm border-0" style="border-radius: 12px; overflow: hidden; border: 1px solid #0d2137 !important;">
    <!-- Header: Navy Solid dengan Ikon Topi Kuning & Tombol Tambah -->
    <div class="card-header py-3 d-flex justify-content-between align-items-center" style="background-color: #0d2137; color: white;">
        <h5 class="mb-0 fw-bold" style="letter-spacing: 1px;">
            <i class="bi bi-mortarboard-fill me-2" style="color: #ffc107;"></i>DATA RIWAYAT PENDIDIKAN
        </h5>
        <!-- TOMBOL TAMBAH YANG BARU DITAMBAHKAN -->
        <!-- Baris 14 yang sudah diperbaiki -->
<a href="index.php?page=tambah_studies" class="btn btn-light btn-sm fw-bold px-3" style="border-radius: 8px; display: inline-block;">
    <i class="bi bi-plus-lg me-1"></i>Tambah
</a>
    </div>
    
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead style="background-color: #ffffff; border-bottom: 2px solid #0d2137;">
                    <tr>
                        <th class="text-center ps-4 py-3" style="color: #000; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">No</th>
                        <th class="py-3" style="color: #000; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Foto</th>
                        <th class="py-3" style="color: #000; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Instansi & Jenjang</th>
                        <th class="py-3" style="color: #000; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Keterangan</th>
                        <th class="text-center pe-4 py-3" style="color: #000; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while($row = mysqli_fetch_array($query)) { 
                    ?>
                    <tr style="border-bottom: 1px solid #bdd9f5;">
                        <td class="text-center fw-bold text-dark ps-4"><?= $no++; ?></td>
                        <td>
                            <?php if(!empty($row['foto_sekolah'])): ?>
                                <img src="assets/images/sekolah/<?= $row['foto_sekolah']; ?>" 
                                     alt="Instansi"
                                     style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid #ddd;">
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="fw-bold text-dark" style="font-size: 1.1rem; margin-bottom: 2px;"><?= $row['nama']; ?></div>
                            <span class="badge" style="background-color: #add3f9; color: #0a1932; border: 1px solid #ddd; font-size: 0.7rem; font-weight: 600;">
                                ID LEVEL: <?= $row['idlevel']; ?>
                            </span>
                        </td>
                        <td>
                            <div class="mb-1 fw-bold text-dark" style="font-size: 0.9rem;">
                                <i class="bi bi-calendar3 me-1"></i> Tahun Lulus: <?= $row['tahun_lulus']; ?>
                            </div>
                            <div style="color: #020631; font-size: 0.9rem; line-height: 1.6; text-align: justify; padding-right: 20px;">
                                <?= $row['keterangan']; ?>
                            </div>
                        </td>
                        <td class="text-center pe-4">
                            <div class="d-flex justify-content-center gap-3">
                                <!-- Link Edit -->
                                <a href="index.php?page=edit_studies&id=<?= $row['id']; ?>" class="text-primary" title="Edit">
                                    <i class="bi bi-pencil-square" style="font-size: 1.2rem;"></i>
                                </a>
                                <!-- Link Hapus -->
                                <a href="index.php?page=hapus_studies&id=<?= $row['id']; ?>" class="text-danger" title="Hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="bi bi-trash" style="font-size: 1.2rem;"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>