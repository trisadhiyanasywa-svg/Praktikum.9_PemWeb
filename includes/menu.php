<?php 
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; 
?>

<style>
    /* CSS asli kamu tetap dipertahankan */
    .logo-box { 
        background: var(--accent-color); 
        color: white; 
        width: 35px; 
        height: 35px; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
        border-radius: 6px; 
        font-weight: 800; 
        margin-right: 10px; 
    }
    
    .nav-link.active { 
        color: white !important; 
        opacity: 1 !important; 
        border-bottom: 2px solid var(--accent-color); 
    }
    
    .nav-profile { 
        color: white; 
        font-weight: 600; 
        font-size: 0.9rem; 
    }

    /* Memastikan dropdown menu tidak tertutup carousel */
    .navbar {
        z-index: 1050;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: var(--primary-color);">
    <div class="container-fluid px-lg-5"> 
        <a class="navbar-brand d-flex align-items-center" href="index.php?page=home">
            <div class="logo-box">T</div>
            <span class="text-white fw-bold">TRISA</span>
            <span style="color:var(--accent-color); font-weight:800; margin-left:5px;">WEB</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'home') ? 'active' : 'opacity-50'; ?>" href="index.php?page=home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'about') ? 'active' : 'opacity-50'; ?>" href="index.php?page=about">ABOUT ME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'contact') ? 'active' : 'opacity-50'; ?>" href="index.php?page=contact">CONTACT ME</a>
                </li>

                <?php if (isset($_SESSION['username'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white <?= (in_array($page, ['level_kerjakan', 'studies_kerjakan'])) ? 'active' : 'opacity-50'; ?>" 
                           href="#" id="navbarDropdownStudies" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            MY STUDIES
                        </a>
                        <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdownStudies">
                            <li><a class="dropdown-item" href="index.php?page=level_kerjakan">Level (CRUD)</a></li>
                            <li><a class="dropdown-item" href="index.php?page=studies_kerjakan">Studies (CRUD)</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ms-lg-3">
                        <a class="nav-link dropdown-toggle text-white fw-bold" href="#" id="navbarDropdownAdmin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle me-1"></i> 
                            <?= $_SESSION['username']; ?> (Admin)
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li><a class="dropdown-item text-danger" href="logout.php">
                                <i class="bi bi-box-arrow-right me-2"></i>Logout
                            </a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item ms-lg-3">
                        <a class="btn rounded-pill px-4" href="index.php?page=login" style="background-color: var(--accent-color); color: white; font-weight: 700;">LOGIN</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>