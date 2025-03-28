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
        --light-color:rgb(124, 239, 120);
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
        box-shadow: 0 2px 10px rgba(146, 32, 32, 0.1);
    }

    .navbar-brand {
        font-weight: 700;
        color: var(--primary-color) !important;
    }

    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://daalderop.id/wp-content/uploads/2023/05/Untitled-design-13.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
        margin-bottom: 50px;
    }

    .product-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        margin-bottom: 30px;
    }

    .product-card:hover {
        transform: translateY(-10px);
    }

    .product-img {
        height: 200px;
        object-fit: cover;
    }

    .badge-eco {
        background-color: var(--primary-color);
        color: white;
    }

    .price {
        color: var(--primary-color);
        font-weight: 700;
        font-size: 1.2rem;
    }

    .btn-eco {
        background-color: var(--primary-color);
        color: white;
    }

    .btn-eco:hover {
        background-color: var(--secondary-color);
        color: white;
    }

    .product-detail-img {
        border-radius: 10px;
        height: 300px;
        object-fit: cover;
    }

    footer {
        background-color: var(--primary-color);
        color: white;
        padding: 50px 0 0;
        margin-top: 50px;
    }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Produk Ramah Lingkungan</h1>
            <p class="lead">Dapatkan produk ramah lingkungan yang mendukung gaya hidup sehat anda!</p>
        </div>
    </section>

    <!-- Product Listing -->
    <section class="product-listing mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-15">
                    <h2 class="text-center fw-bold">Produk Kami</h2>
                </div>
            </div>

            <div class="row">
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://blogpictures.99.co/Bambu-Merambat.jpg"
                            class="card-img-top product-img" alt="Daur ulang">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Nonorganik</span>
                            <h5 class="card-title">kreatifitas dari bambu</h5>
                            <p class="card-text">karya daur ulang yang cocok untuk digunakan untuk memperindah ruangan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 50.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://www.pesona.co.id/img/images/bawa%20kantong%20belanja%20sendiri.jpg"
                            class="card-img-top product-img" alt="Rotan">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Nonorganik</span>
                            <h5 class="card-title">keranjang belanjaan</h5>
                            <p class="card-text">Keranjang belanjaan yang dapat menghemat penggunaan plastik.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 40.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://cdn.idntimes.com/content-images/community/2023/01/pexels-sarah-chai-7262742-041098ef9261d329354569bb74bb3364-b0fea2154cb60c2903ad30694a816346.jpg"
                            class="card-img-top product-img" alt="Tumbler">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Nonorganik</span>
                            <h5 class="card-title">Tumbler isi ulang</h5>
                            <p class="card-text">Tumbler isi ulang yang ramah lingkungan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 65.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-23030-v5r9p4lh8wov49"
                            class="card-img-top product-img" alt="Spons">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Nonorganik</span>
                            <h5 class="card-title">Spons cuci piring</h5>
                            <p class="card-text">Spons cuci piring, membersihkan kotoran hinggaa bersih tanpa sisa dan ramah lingkungan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 12.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Product 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://titipku.com/blog/wp-content/uploads/2021/04/notebook-ecological_23-2148576650.jpg"
                            class="card-img-top product-img" alt="kertas">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Nonorganik</span>
                            <h5 class="card-title">kertas daur ulang</h5>
                            <p class="card-text">kertas daur ulang yang dapat di pakai berkali kali dan ramah lingkungan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 75.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://2.bp.blogspot.com/-HGUew4InvB4/Whqnbz2pwQI/AAAAAAAACM0/LjUYJzHlAvEodbM2Zky0pEqoHPzd_AKuACLcBGAs/s1600/tas2Bcantik2Bdari2Bbungkus2Bkopi.jpg"
                            class="card-img-top product-img" alt="shoulder bag">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Nonorganik</span>
                            <h5 class="card-title">Tas daur ulang</h5>
                            <p class="card-text">Tas daur ulang yang dapat digunakan dan ramah lingkungan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 55.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://indonesian.workinghandsgloves.com/photo/pl18511717-silicone_dots_thermal_gloves_for_freezer_work_environmental_friendly_nylon_materials_red_color_hand_protection.jpg"
                            class="card-img-top product-img" alt="sarung tangan kain">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Nonorganik</span>
                            <h5 class="card-title">Sarung tangan</h5>
                            <p class="card-text">Sarung tangan kain yang dapat di daur ulang yang ramah lingkungan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 45.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://hyundai.motorstudio.co.id/storage/newsrooms/8x99zpruRWzNFo8uZadT1jYmzwZjsV-metabWVuZ2VuYWwta29tcG9zdGVyLWRhbi1jYXJhLW1lbWJ1YXRueWEuanBn-.jpg"
                            class="card-img-top product-img" alt="Komposter dapur">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Elektronik</span>
                            <h5 class="card-title">Komposter daur ulang</h5>
                            <p class="card-text">Alat untuk daur ulang sampah organik menjadi pupuk yang dapat digunakan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 3.000.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>



    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>