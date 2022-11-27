<?php include './admin/_config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bangkitkan Semangat Indonesia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Impact - v1.0.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Bangkitkan Semangat Indonesia<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#kategori">Kategori</a></li>
                    <li><a href="#artikel">Artikel</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Bangkitkan Semangat <span>Indonesia</span></h2>
                    <p>Kita tidak boleh berhenti berkreasi, berinovasi, dan berprestasi. Kita harus buktikan ketangguhan kita. Kita harus menangkan masa depan kita dan kita wujudkan cita-cita para Pendiri Bangsa dengan semangat bela negara.</p>

                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="assets/img/bela-negara.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>

        <div id="kategori" class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">
                    <?php
                    $data = mysqli_query($con, "SELECT * FROM kategori");
                    foreach ($data as $row) : ?>

                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-box">
                                <h4 class="title"><a href="detail_kategori.php?id_kategori=<?= $row['id_kategori'] ?>" class="stretched-link">
                                        <td><?= $row['kategori'] ?></td>
                                    </a></h4>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!--End Icon Box -->
                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
        <!-- ======= Blog Section ======= -->
        <section id="artikel" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Berita Tentang Bela Negara Untuk Bangkitkan Semangat Indonesia</h2>
                    <p></p>
                </div>
                <div class="row gy-4 posts-list">
                    <?php $data = mysqli_query($con, "SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 6");
                    foreach ($data as $row) : ?>
                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="<?= "admin/img_artikel/" . $row['gambar'] ?>" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">
                                    <?php $dta = mysqli_query($con, "SELECT * FROM kategori WHERE id_kategori = " . $row['id_kategori'] . " ");
                                    foreach ($dta as $kat):
                                    echo $kat['kategori'];
                                    endforeach; ?>
                                </p>

                                <h2 class="title">
                                    <a href="detail_artikel.php?id_artikel=<?= $row['id_artikel'] ?>"><?= $row['judul'] ?></a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <!-- <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0"> -->
                                    <div class="post-meta">
                                        <p class=""><?= substr($row['artikel'], 0, 200) . '...' ?></p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01"><?php echo $row['tanggal'] ?></time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                    <?php endforeach; ?>

                </div><!-- End blog posts list -->

                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <!-- <li><a href="#">1</a></li> -->
                        <li class="active"><a href="#">Lihat Semua Artikel</a></li>
                        <!-- <li><a href="#">3</a></li> -->
                    </ul>
                </div><!-- End blog pagination -->

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>BSI</span>
                    </a>
                    <p>Bangkitkan Semangat Indonesia</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Kontak Kami</h4>
                    <ul>
                        <li><a href="#">Jakarta, Indonesia</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Telepon</h4>
                    <ul>
                        <li><a href="#">081234567891</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Email</h4>
                    <strong>Email:</strong>bsi@gmail.com<br>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Bangkitkan Semangat Indonesia</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>