<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trisa Dhiya Nasywa - Portfolio</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        :root { 
            --primary-color: #0d2137; 
            --accent-color: #fd7e14; 
        }

        body { 
            font-family: 'Poppins', sans-serif; 
            background-color: #f8f9fa; 
        }

        /* Styling Carousel agar tetap konsisten dengan desain awal */
        .carousel-item {
            height: 450px;
            background-size: cover; 
            background-position: center;
            border-bottom: 5px solid var(--accent-color);
        }

        /* Overlay gelap agar teks terbaca jelas */
        .carousel-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-title {
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 3rem;
        }
    </style>
</head>
<body>

    <header id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=2070');">
                <div class="carousel-overlay">
                    <div class="container">
                        <h1 class="hero-title">Trisa Dhiya Nasywa</h1>
                        <p class="lead">Informatics Engineering Student | Web Developer Enthusiast</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=2070');">
                <div class="carousel-overlay">
                    <div class="container">
                        <h1 class="hero-title">Creative Coding</h1>
                        <p class="lead">Building Modern & Responsive Web Applications</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=2070');">
                <div class="carousel-overlay">
                    <div class="container">
                        <h1 class="hero-title">Tech Portfolio</h1>
                        <p class="lead">Focused on UI/UX and Backend Development</p>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </header>

