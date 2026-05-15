<!-- CSS Overlay agar login di tengah & rapi -->
<style>
    .login-wrapper {
        position: fixed; top: 0; left: 0; width: 100%; height: 100%;
        background-color: #f0f2f5; z-index: 9999;
        display: flex; align-items: center; justify-content: center;
    }
    .login-card {
        width: 100%; max-width: 420px; border: none;
        border-radius: 15px; box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        background: #fff; overflow: hidden;
    }
    .login-header {
        background-color: #0d2137; /* Warna Navy Trisa Web */
        padding: 30px; text-align: center; color: white;
    }
    .btn-login {
        background-color: #10b981; /* Hijau Emerald agar 'hidup' */
        color: white; border: none; padding: 12px; border-radius: 8px;
        font-weight: 700; letter-spacing: 1px; transition: 0.3s;
    }
    .btn-login:hover { background-color: #059669; color: white; transform: translateY(-2px); }
    .form-control:focus { border-color: #0d2137; box-shadow: none; }
</style>

<div class="login-wrapper">
    <div class="card login-card">
        <div class="login-header">
            <i class="bi bi-person-circle fs-1"></i>
            <h4 class="fw-bold mt-2 mb-0">ADMIN PORTAL</h4>
        </div>
        <div class="card-body p-4 p-md-5">
            <form action="proses_login.php" method="POST">
                <div class="mb-3">
                    <label class="form-label small fw-bold" style="color: #0d2137;">USERNAME</label>
                    <input type="text" name="username" class="form-control" 
                           placeholder="Masukkan username" 
                           style="background: #fff; border: 1.5px solid #dee2e6; padding: 12px;" required>
                </div>
                
                <div class="mb-4">
                    <label class="form-label small fw-bold" style="color: #0d2137;">PASSWORD</label>
                    <input type="password" name="password" class="form-control" 
                           placeholder="Masukkan password" 
                           style="background: #fff; border: 1.5px solid #dee2e6; padding: 12px;" required>
                </div>

                <button type="submit" name="login" class="btn btn-login w-100 shadow-sm">
                    MASUK KE SISTEM
                </button>
            </form>

            <div class="text-center mt-4">
                <a href="index.php?page=home" class="text-decoration-none small fw-bold" style="color: #0d2137;">
                    <i class="bi bi-house-door me-1"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</div>