<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldGreen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    :root {
        --primary-color:rgb(14, 126, 29);
        --secondary-color:rgb(14, 126, 29);
        --dark-color:rgb(236, 238, 244);
        --light-color:rgb(14, 126, 29);s
    }
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        scroll-behavior: smooth;
    }

    .navbar {
        box-shadow: 0 2px 10px rgba(255, 255, 255, 0.1);
        background-color: white !important;
    }

    .navbar-brand {
        font-weight: 700;
        color: var(--primary-color) !important;
        font-size: 1.5rem;
    }

    .hero-section {
        background-image:url('https://superapp.id/blog/wp-content/uploads/2022/03/Malaysia-RUbber-Council-570x468.jpg');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100%;
        color: white;
        padding: 150px 0;
        text-align: center;
    }

    .section-title {
        position: relative;
        margin-top: -30px;
        margin-bottom: 50px;
        font-weight: 700;
        color: var(--dark-color);
    }

    .section-title::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: -15px;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: var(--primary-color);
    }

    .about-section {
        padding: 100px 0;
        background-color: var(--light-color);
    }

    .company-carousel {
        padding: 80px 0;
    }

    .carousel-item img {
        height: 500px;
        object-fit: cover;
        border-radius: 10px;
    }

    .testimonial-section {
        padding: 100px 0;
        background-color: var(--dark-color);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
    }

    .testimonial-card {
        background-color: rgb(181, 214, 184);
        border-radius: 10px;
        padding: 30px;
        color: var(--dark-color);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin: 15px;
        height: 100%;
    }

    .testimonial-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid var(--primary-color);
        margin-bottom: 15px;
    }

    .rating {
        color: #ffc107;
        margin-bottom: 15px;
    }

    .about-feature {
        margin-top: -150px;
        margin-right: 10px;
        padding: 100px 0;
        background-color: var(--light-color);
    }

    .feature-box {
        width: 250px;
        height: 250px;
        text-align: center;
        padding: 30px 20px;
        border-radius: 10px;
        transition: all 0.3s ease;
        margin-bottom: 30px;
        background-color: white;
        box-shadow: 0 10px 15px rgba(255, 255, 255, 0.05);
    }

    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    footer {
        background-color: var(--dark-color);
        color: white;
        padding: 70px 0 0;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
        margin-bottom: 10px;
    }

    .footer-links a:hover {
        color: white;
        padding-left: 5px;
    }

    .social-icons a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        margin-right: 10px;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        background-color: var(--primary-color);
        transform: translateY(-3px);
    }

    .copyright {
        background-color: rgba(0, 0, 0, 0.2);
        padding: 20px 0;
        margin-top: 50px;
    }
    </style>
</head>

<body>


    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">"Hidup Sehat, Dengan Lingkungan Yang Sehat!"</h1>
            <p class="lead mb-5">WorldGreen Menciptakan Solusi Hijau yang Membawa Dampak Positif Bagi Bumi dan Generasi Mendatang</p>
            <a href="#about" class="btn btn-outline-light btn-lg">Tentang Kami</a>
            <a href="#contact" class="btn btn-outline-light btn-lg">Kontak Kami</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <h2 class="text-center section-title">Tentang WorldGreen</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" style="margin-top: 10px;">
                    <img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2021/10/13/hybe-labelsjpg-20211013073243.jpg"
                        alt="Tentang WorldGreen" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Misi Kami untuk Lingkungan yang Lebih Baik</h3>
                    <p>​Worldgreen adalah sebuah perusahaan yang berfokus pada penyediaan produk dan layanan ramah lingkungan. Pada tahun 2018, Lumy House, bagian dari Worldgreen, menerima penghargaan World Green Design Contribution Award atas kontribusinya dalam desain bangunan hijau dan ramah lingkungan. Selain itu, Green Building Council Indonesia, yang berperan dalam sertifikasi bangunan hijau di Indonesia, merupakan anggota dari World Green Building Council. Perusahaan ini juga aktif dalam sektor perjalanan, melalui World Green Travel and Tours, yang menawarkan layanan penerbangan sewaan, konsultasi visa, penjualan tiket, serta layanan haji dan umrah</p>
                </div>
            </div>
        </div>
    </section>             
    <section class="about-feature"> 
    <div class="container"> 
        <div class="row mt-4 justify-content-center"> <!-- Tambahkan justify-content-center -->
            <div class="col-md-3 mb-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4>Berkelanjutan</h4>
                    <p>Solusi yang mendukung kelestarian lingkungan untuk generasi mendatang</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4>Inovatif</h4>
                    <p>Teknologi terbaru untuk efisiensi energi dan pengelolaan sumber daya</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Company Carousel -->
    <section class="company-carousel" id="company">
        <div class="container">
            <h2 class="text-center section-title">Galeri Perusahaan</h2>
            <div id="companyCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="0"
                        class="active"></button>
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://pict.sindonews.net/dyn/850/pena/news/2024/01/24/700/1305941/6-fasilitas-menggiurkan-di-gedung-hybe-terbaru-cuma-satusatunya-di-agensi-kpop-qkx.jpg"
                            class="d-block w-100" alt="Fasilitas WorldGreen">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Fasilitas perusahaan yang ramah lingkungan</h5>
                            <p>Pabrik kami menggunakan 100% energi terbarukan dengan fasilitas yang memadai dan tidak tercemar
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://asset-2.tstatic.net/trends/foto/bank/images/MBC-dan-HYBE-berdiskusi-lebih-lanjut-guna-membangun-lingkungan-produksi-konten-yang-sehat.jpg"
                            class="d-block w-100" alt="Tim WorldGreen">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Tim Profesional yang Berdedikasi</h5>
                            <p>Lebih dari 100 ahli lingkungan bekerja untuk menciptakan solusi berkelanjutan</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://2.bp.blogspot.com/-qAt943-OP5c/W19JUJghUbI/AAAAAAAAEms/wLOL3xqm8AcVWLDB3fMk4EqrsN929J7dwCLcBGAs/s1600/holbung%252Csamosir.JPG"
                            class="d-block w-100" alt="Proyek WorldGreen">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Proyek Penghijauan Global</h5>
                            <p>Kami telah menanam lebih dari 1 juta pohon di 15 negara berbeda</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#companyCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#companyCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section" id="testimonial">
        <div class="container">
            <h2 class="text-center section-title text-white">Testimoni Pelanggan Kami</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://st1.bollywoodlife.com/wp-content/uploads/2022/12/RM-30.png" alt="Testimoni 1"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-center">""Saya sangat menyukai perusahaan WorldGreen karena selain kualitas barang yangbagus dan manfaatnya produk mereka juga sanagt ramah dikantong untuk banyaknya manfaat yang diberikan.""</p>
                        <h5 class="text-center mt-3">Kim Namjoon</h5>
                        <p class="text-muted text-center">CEO Hybe</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://i.pinimg.com/originals/84/a9/9e/84a99e53299a49a27c088cf3640c7b23.jpg" alt="Testimoni 2"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-center">"Layanan perusahaan WorldGreen sangat profesional. Mereka tidak hanya
                            memberikan solusi tetapi juga pelatihan untuk tim kami. Sangat direkomendasikan!"</p>
                        <h5 class="text-center mt-3">Jeon Jungkook</h5>
                        <p class="text-muted text-center">Direktur GreenCitiZen</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://www.musicmundial.com/en/wp-content/uploads/2023/04/suga-bts.jpg" alt="Testimoni 3"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="text-center">"Produk daur ulang WorldGreenmemiliki kualitas yang sangat baik! telah terbukti dari banyaknya produk mereka yang kami miliki dan membuat pelanggan kami puas akan produknya."</p>
                        <h5 class="text-center mt-3">Min Yonggi</h5>
                        <p class="text-muted text-center">Manajer Zonaebt</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>