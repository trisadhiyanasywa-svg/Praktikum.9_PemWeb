<style>
    /* Kostumisasi warna Accordion agar senada dengan Navy Navbar */
    .accordion-button:not(.collapsed) {
        background-color: #e9f1f5 !important; /* Biru muda sangat lembut */
        color: #0d2137 !important; /* Teks Navy saat dibuka */
        font-weight: bold;
    }
    .accordion-button:focus {
        border-color: #0d2137 !important;
        box-shadow: 0 0 0 0.25rem rgba(13, 33, 55, 0.1) !important;
    }
    .accordion-item {
        border: 2px solid #0d2137 !important;
        border-radius: 15px !important;
        overflow: hidden;
        margin-bottom: 15px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }
    .accordion-header .accordion-button {
        border-radius: 0;
    }
</style>

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-12 text-center mb-4">
            <h2 class="fw-bold" style="color: #0e3f73; text-transform: uppercase; letter-spacing: 2px;">About Me</h2>
            <p class="text-muted">Kenali saya lebih dekat lewat halaman ini</p>
            <div style="width: 80px; height: 4px; background-color: #0d2137; margin: 0 auto; border-radius: 10px;"></div>
        </div>

        <div class="col-lg-10 mb-4">
            <div class="card shadow-sm p-4" style="border-radius: 20px; border: 2px solid #0d2137; background-color: #ffffff;">
                <div class="row align-items-center">
                    <div class="col-md-3 text-center mb-3 mb-md-0">
                        <img src="assets/images/sekolah/Profil2.jpg" 
                             class="img-fluid rounded-4 shadow-sm" 
                             alt="Trisa Dhiya Nasywa" 
                             style="width: 180px; height: 180px; object-fit: cover; border: 2px solid #0d203c;">
                    </div>
                    
                    <div class="col-md-9">
                        <h4 class="fw-bold mb-3" style="color: #0d2137;">Profil Singkat</h4>
                        <div style="background-color: #e9f1f5; border: 1px solid #092334; padding: 20px; border-radius: 10px;">
                            <p class="text-dark" style="line-height: 1.6; text-align: justify;">
                                Hello! Nama saya <strong>Trisa Dhiya Nasywa</strong>. Saat ini saya sedang menempuh pendidikan dan fokus mendalami dunia pemrograman web. Website ini adalah salah satu karya portofolio pertama saya.
                            </p>
                            <div class="row mt-3">
                                <div class="col-6 small fw-bold">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>PHP Native<br>
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>Bootstrap 5
                                </div>
                                <div class="col-6 small fw-bold">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>UI/UX Design<br>
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>Responsive Web
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-10 mb-5">
            <div class="accordion" id="accordionAboutMe">
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            <i class="bi bi-heart-fill text-danger me-2"></i> Hobi & Inspirasi
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionAboutMe">
                        <div class="accordion-body">
                            <p>Selain ngoding, saya punya beberapa aktivitas yang suka saya lakukan untuk mencari inspirasi:</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Belajar Hal Baru:</strong> Selalu penasaran dengan update hal baru.</li>
                                <li class="list-group-item"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Mendengarkan Musik:</strong> Teman setia saat mengerjakan tugas project.</li>
                                <li class="list-group-item"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Hunting Foto:</strong> Mengabadikan momen menarik di sekitar.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                            <i class="bi bi-cup-hot-fill text-warning me-2"></i> Kuliner Favorit
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionAboutMe">
                        <div class="accordion-body">
                            <div class="mb-3 p-3 bg-light rounded border-start border-4 border-warning">
                                <strong>Dimsum Mix Mentai Cheese & Spicy:</strong>
                                <p class="mb-0 small">Perpaduan rasa adonan dimsum yang juicy dan meaty dipadukan dengan saus mentai yang gurih.</p>
                            </div>
                            <div class="p-3 bg-light rounded border-start border-4 border-warning">
                                <strong>Matcha Latte:</strong>
                                <p class="mb-0 small">Minuman wajib kalau lagi badmood karena bikin happy dan rileks.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                            <i class="bi bi-people-fill text-info me-2"></i> Pengalaman Organisasi
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionAboutMe">
                        <div class="accordion-body">
                            <table