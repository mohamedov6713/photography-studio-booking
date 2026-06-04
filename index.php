<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision Photography Studio</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#0f0f0f;
            color:white;
            overflow-x:hidden;
        }

        html{
            scroll-behavior:smooth;
        }

        /* NAVBAR */

        .navbar{
            background:rgba(0,0,0,0.7);
            backdrop-filter:blur(10px);
        }

        .navbar-brand{
            font-size:28px;
            font-weight:700;
            color:#ffc107 !important;
        }

        .nav-link{
            color:white !important;
            margin-left:15px;
            transition:0.4s;
            position:relative;
        }

        .nav-link:hover{
            color:#ffc107 !important;
            transform:translateY(-2px);
        }

        .nav-link::after{
            content:'';
            position:absolute;
            left:0;
            bottom:-5px;
            width:0%;
            height:2px;
            background:#ffc107;
            transition:0.4s;
        }

        .nav-link:hover::after{
            width:100%;
        }

        /* HERO */

        .hero{
            height:100vh;
            background:
            linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7)),
            url('https://images.unsplash.com/photo-1516035069371-29a1b244cc32?q=80&w=1600&auto=format&fit=crop')
            center/cover no-repeat;

            display:flex;
            justify-content:center;
            align-items:center;
            text-align:center;
        }

        .hero h1{
            font-size:70px;
            font-weight:700;
            animation:fadeDown 1.5s ease;
        }

        .hero p{
            font-size:22px;
            color:#ddd;
            margin-top:20px;
            animation:fadeUp 1.5s ease;
        }

        .hero-btn{
            margin-top:30px;
            padding:14px 40px;
            border:none;
            border-radius:40px;
            background:#ffc107;
            color:black;
            font-weight:600;
            transition:0.4s;
            text-decoration:none;
            display:inline-block;
        }

        .hero-btn:hover{
            transform:translateY(-5px) scale(1.05);
            background:white;
            box-shadow:0 10px 25px rgba(255,193,7,0.4);
        }

        /* SECTION */

        section{
            padding:100px 0;
        }

        .section-title{
            text-align:center;
            margin-bottom:70px;
        }

        .section-title h2{
            font-size:45px;
            font-weight:700;
            color:#ffc107;
        }

        .section-title p{
            color:#bbb;
        }

        /* ABOUT */

        .about-img{
            overflow:hidden;
            border-radius:20px;
        }

        .about-img img{
            width:100%;
            transition:0.6s;
        }

        .about-img:hover img{
            transform:scale(1.1);
        }

        .about-content h3{
            font-size:40px;
            margin-bottom:20px;
        }

        .about-content p{
            color:#ccc;
            line-height:1.8;
        }

        /* SERVICES */

        .service-card{
            background:#1b1b1b;
            padding:40px 30px;
            border-radius:20px;
            transition:0.5s;
            text-align:center;
            height:100%;
            border:1px solid transparent;
        }

        .service-card i{
            font-size:50px;
            color:#ffc107;
            margin-bottom:20px;
        }

        .service-card h4{
            margin-bottom:15px;
        }

        .service-card p{
            color:#bbb;
        }

        .service-card:hover{
            transform:translateY(-15px);
            border:1px solid #ffc107;
            box-shadow:0 20px 40px rgba(255,193,7,0.15);
        }

        /* GALLERY */

        .gallery-item{
            position:relative;
            overflow:hidden;
            border-radius:20px;
        }

        .gallery-item img{
            width:100%;
            height:350px;
            object-fit:cover;
            transition:0.6s;
        }

        .gallery-item:hover img{
            transform:scale(1.12);
        }

        .gallery-overlay{
            position:absolute;
            inset:0;
            background:rgba(0,0,0,0.6);
            display:flex;
            justify-content:center;
            align-items:center;
            opacity:0;
            transition:0.5s;
        }

        .gallery-item:hover .gallery-overlay{
            opacity:1;
        }

        .gallery-overlay i{
            font-size:50px;
            color:white;
        }

        /* STATS */

        .stats{
            background:#161616;
        }

        .stat-box{
            text-align:center;
            padding:30px;
        }

        .stat-box h2{
            font-size:50px;
            color:#ffc107;
            font-weight:700;
        }

        /* CONTACT */

        .contact-form{
            background:#1a1a1a;
            padding:50px;
            border-radius:20px;
        }

        .form-control{
            background:#111;
            border:none;
            color:white;
            padding:15px;
            margin-bottom:20px;
        }

        .form-control:focus{
            background:#111;
            color:white;
            box-shadow:none;
            border:1px solid #ffc107;
        }

        .submit-btn{
            background:#ffc107;
            border:none;
            padding:14px;
            border-radius:40px;
            font-weight:600;
            transition:0.4s;
        }

        .submit-btn:hover{
            background:white;
            transform:translateY(-3px);
        }

        /* FOOTER */

        footer{
            background:black;
            text-align:center;
            padding:25px;
            color:#aaa;
        }

        /* ANIMATION */

        @keyframes fadeDown{
            from{
                opacity:0;
                transform:translateY(-50px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        @keyframes fadeUp{
            from{
                opacity:0;
                transform:translateY(50px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        /* RESPONSIVE */

        @media(max-width:768px){

            .hero h1{
                font-size:45px;
            }

            .hero p{
                font-size:18px;
            }

            .section-title h2{
                font-size:35px;
            }
        }

    </style>
</head>
<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">

        <a class="navbar-brand" href="#">
            Vision Studio
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse"
        data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<!-- HERO -->

<section class="hero" id="home">

    <div class="container">

        <h1>Capture Moments<br>That Last Forever</h1>

        <p>
            Professional Photography Studio For Weddings,
            Fashion, Portraits & Events
        </p>

        <a href="#contact" class="hero-btn">
            Book Session
        </a>

    </div>

</section>

<!-- ABOUT -->

<section id="about">

    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>About Studio</h2>
            <p>Modern Photography Experience</p>
        </div>

        <div class="row align-items-center">

            <div class="col-lg-6" data-aos="zoom-in">

                <div class="about-img">

                    <img src="https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=1200&auto=format&fit=crop">

                </div>

            </div>

            <div class="col-lg-6" data-aos="fade-left">

                <div class="about-content">

                    <h3>Creative Photography Studio</h3>

                    <p>
                        We create cinematic and emotional photography
                        experiences with modern editing, professional
                        lighting, and storytelling techniques.
                    </p>

                    <p>
                        From weddings to commercial shoots, our mission
                        is to turn every memory into timeless art.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- SERVICES -->

<section id="services" class="bg-black">

    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Our Services</h2>
            <p>Premium Photography Solutions</p>
        </div>

        <div class="row g-4">

            <div class="col-lg-4" data-aos="fade-up">

                <div class="service-card">

                    <i class="bi bi-camera2"></i>

                    <h4>Wedding Photography</h4>

                    <p>
                        Elegant wedding photography and cinematic moments.
                    </p>

                </div>

            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">

                <div class="service-card">

                    <i class="bi bi-person-bounding-box"></i>

                    <h4>Portrait Sessions</h4>

                    <p>
                        Modern portrait photography with creative lighting.
                    </p>

                </div>

            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">

                <div class="service-card">

                    <i class="bi bi-stars"></i>

                    <h4>Fashion Shoots</h4>

                    <p>
                        Luxury fashion photography for brands and models.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- GALLERY -->

<section id="gallery">

    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Gallery</h2>
            <p>Our Featured Photography</p>
        </div>

        <div class="row g-4">

            <div class="col-lg-4" data-aos="zoom-in">

                <div class="gallery-item">

                    <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?q=80&w=1200&auto=format&fit=crop">

                    <div class="gallery-overlay">
                        <i class="bi bi-plus"></i>
                    </div>

                </div>

            </div>

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="150">

                <div class="gallery-item">

                    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=1200&auto=format&fit=crop">

                    <div class="gallery-overlay">
                        <i class="bi bi-plus"></i>
                    </div>

                </div>

            </div>

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">

                <div class="gallery-item">

                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=1200&auto=format&fit=crop">

                    <div class="gallery-overlay">
                        <i class="bi bi-plus"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- STATS -->

<section class="stats">

    <div class="container">

        <div class="row">

            <div class="col-md-3" data-aos="fade-up">
                <div class="stat-box">
                    <h2>500+</h2>
                    <p>Clients</p>
                </div>
            </div>

            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-box">
                    <h2>120+</h2>
                    <p>Weddings</p>
                </div>
            </div>

            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-box">
                    <h2>15+</h2>
                    <p>Awards</p>
                </div>
            </div>

            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-box">
                    <h2>8</h2>
                    <p>Years Experience</p>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- CONTACT -->

<section id="contact">

    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Contact Us</h2>
            <p>Book Your Photography Session</p>
        </div>

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <form action="contact.php" method="POST"
                class="contact-form"
                data-aos="zoom-in">

                    <input type="text"
                    name="name"
                    class="form-control"
                    placeholder="Your Name"
                    required>

                    <input type="email"
                    name="email"
                    class="form-control"
                    placeholder="Your Email"
                    required>

                    <textarea
                    name="message"
                    rows="5"
                    class="form-control"
                    placeholder="Your Message"></textarea>

                    <button class="submit-btn w-100">
                        Send Message
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->

<footer>
    © 2026 Vision Photography Studio. All Rights Reserved.
</footer>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS -->

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration:1200,
        once:true
    });
</script>

</body>
</html>