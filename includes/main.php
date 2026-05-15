<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        include "pages/home.php";
        break;

    case 'about':
        include "pages/about.php";
        break;

    case 'contact':
        include "pages/contact.php";
        break;

    // --- MANAJEMEN LEVEL PENDIDIKAN ---
    case 'level_kerjakan':
        include "pages/level_kerjakan.php";
        break;
    case 'tambah_level':
        include "pages/tambah_level.php";
        break;
    case 'proses_tambah_level':
        include "pages/proses_tambah_level.php";
        break;
    case 'edit_level':
        include "pages/edit_level.php";
        break;
    case 'proses_edit_level':
        include "pages/proses_edit_level.php";
        break;
    case 'hapus_level':
        include "pages/hapus_level.php";
        break;

    // --- MANAJEMEN RIWAYAT PENDIDIKAN (STUDIES) ---
    case 'studies_kerjakan':
        include "pages/studies_kerjakan.php";
        break;
    case 'tambah_studies':
        include "pages/tambah_studies.php";
        break;
    case 'proses_tambah_studies':
        include "pages/proses_tambah_studies.php";
        break;
    case 'edit_studies':
        include "pages/edit_studies.php";
        break;
    case 'proses_edit_studies':
        include "pages/proses_edit_studies.php";
        break;
    case 'hapus_studies':
        include "pages/hapus_studies.php";
        break;

    case 'login':
        include "pages/login.php";
        break;

    case 'logout':
        include "pages/logout.php";
        break;

    default:
        echo "<div class='container mt-5'>
                <div class='alert alert-danger text-center py-5'>
                    <h3 class='fw-bold'>Halaman Tidak Ditemukan!</h3>
                    <a href='index.php?page=home' class='btn btn-danger mt-3'>Kembali ke Home</a>
                </div>
              </div>";
        break;
}
?>