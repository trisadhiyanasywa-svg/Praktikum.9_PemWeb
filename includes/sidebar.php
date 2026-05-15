<?php 
// 1. Ambil parameter page dari URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; 
?>

<style>
    /* Container Utama */
    .sidebar-card {
        border-radius: 15px; 
        border: 2px solid #0d2137; 
        overflow: hidden;
        background-color: #ffffff;
    }

    /* Style Link: Dibuat SAMA PERSIS untuk atas dan bawah */
    .side-link {
        transition: all 0.2s ease;
        color: #0d2137 !important;
        font-weight: 500;
        border-radius: 8px !important;
        margin-bottom: 4px;
        text-decoration: none !important; /* Hilangkan garis bawah link default */
        display: flex;
        align-items: center;
        padding: 10px 15px;
        border: none !important;
    }

    /* Efek Hover */
    .side-link:hover {
        background-color: #f8f9fa !important;
        color: #fd7e14 !important;
    }

    /* INDIKATOR AKTIF (Kotak Abu-abu, NO GARIS BAWAH) */
    .is-active {
        background-color: #e9ecef !important; /* Kotak abu-abu seperti di screenshot */
        font-weight: 700 !important;
        color: #0d2137 !important;
        text-decoration: none !important;
        border-bottom: none !important; /* Hapus garis bawah yang bikin risih itu */
    }

    .sidebar-label {
        letter-spacing: 1px; 
        font-size: 0.7rem;
        padding-left: 15px;
    }
</style>

<div class="sidebar-card shadow-sm">
    <div class="card-header border-0 p-3 text-white fw-bold" style="background-color: #0d2137;">
        <i class="bi bi-list-stars me-2"></i> MENU
    </div>

    <div class="list-group list-group-flush p-2">
        <a href="index.php?page=home" 
           class="side-link <?= ($page == 'home') ? 'is-active' : ''; ?>">
            <i class="bi bi-house-door-fill me-2 text-primary"></i> Home
        </a>

        <a href="index.php?page=about" 
           class="side-link <?= ($page == 'about') ? 'is-active' : ''; ?>">
            <i class="bi bi-person-fill me-2 text-info"></i> About Me
        </a>

        <a href="index.php?page=contact" 
           class="side-link <?= ($page == 'contact') ? 'is-active' : ''; ?>">
            <i class="bi bi-chat-dots-fill me-2 text-success"></i> Contact Me
        </a>

        <hr class="mx-3 my-2" style="opacity: 0.1;">

        <div class="py-1">
            <p class="small fw-bold text-muted mb-2 text-uppercase sidebar-label">Data Studies</p>
            
            <a href="index.php?page=level_kerjakan" 
               class="side-link <?= ($page == 'level_kerjakan') ? 'is-active' : ''; ?>">
                <i class="bi bi-layers-fill me-2" style="color: #0d2137;"></i> 
                Level (CRUD)
            </a>
            
            <a href="index.php?page=studies_kerjakan" 
               class="side-link <?= ($page == 'studies_kerjakan' || $page == 'tambah_studies' || $page == 'edit_studies') ? 'is-active' : ''; ?>">
                <i class="bi bi-mortarboard-fill me-2" style="color: #0d2137;"></i> 
                Studies (CRUD)
            </a>
        </div>
    </div>
</div>