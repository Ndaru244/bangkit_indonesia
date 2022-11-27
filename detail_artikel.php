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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Kategori</a></li>
                    <li><a href="index.php#artikel">Artikel</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 text-center">
                            <h2>Bangkitkan Semangat Indonesia</h2>
                            <p>Kita tidak boleh berhenti berkreasi, berinovasi, dan berprestasi. Kita harus buktikan ketangguhan kita. Kita harus menangkan masa depan kita dan kita wujudkan cita-cita para Pendiri Bangsa dengan semangat bela negara.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <?php
            $id_artikel = $_GET['id_artikel'];
            $data = mysqli_query($con, "SELECT * FROM artikel where id_artikel=$id_artikel");
            foreach ($data as $row) : ?>
                <div class="container" data-aos="fade-up">

                    <div class="row g-5">

                        <div class="col-lg-8">

                            <article class="blog-details">

                                <div class="post-img">
                                    <img src="<?= "admin/img_artikel/" . $row['gambar'] ?>" alt="" class="img-fluid">
                                </div>

                                <h2 class="title"><?= $row['judul'] ?></h2>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="<?= $row['tanggal'] ?>"><?= $row['tanggal'] ?></time></a></li>
                                            <?php $dta = mysqli_query($con, "SELECT * FROM kategori WHERE id_kategori = " . $row['id_kategori'] . " ");
                                            foreach ($dta as $kat) : ?>
                                        <li class="d-flex align-items-center"><i class="bi bi-tags"></i><a href="detail_kategori.php?id_kategori=<?= $row['id_kategori'] ?>">
                                            <?php echo $kat['kategori'];
                                            endforeach; ?>
                                        </a></li>
                                    </ul>
                                </div><!-- End meta top -->

                                <div class="content">
                                    <?= $row['artikel'] ?>
                                </div><!-- End post content -->

                                <div class="meta-bottom">
                                    <i class="bi bi-tags"></i>
                                    <ul class="tags">
                                        <?php $dta = mysqli_query($con, "SELECT * FROM kategori WHERE id_kategori = " . $row['id_kategori'] . " ");
                                        foreach ($dta as $kat) : ?>
                                        <li><a href="detail_kategori.php?id_kategori=<?= $row['id_kategori'] ?>">
                                                <?php echo $kat['kategori'];
                                        endforeach; ?>
                                        </a></li>
                                    </ul>
                                </div><!-- End meta bottom -->

                            </article><!-- End blog post -->

                            <div class="post-author d-flex align-items-center">
                                <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                                <div>
                                    <h4>Jane Smith</h4>
                                    <div class="social-links">
                                        <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                        <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                        <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                                    </div>
                                    <p>
                                        Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                                    </p>
                                </div>
                            </div><!-- End post author -->

                        </div>

                        <div class="col-lg-4">

                            <div class="sidebar">

                                <!-- <div class="sidebar-item search-form">
                                    <h3 class="sidebar-title">Search</h3>
                                    <form action="" class="mt-3">
                                        <input type="text">
                                        <button type="submit"><i class="bi bi-search"></i></button>
                                    </form>
                                </div>End sidebar search formn -->

                                <div class="sidebar-item categories">
                                    <h3 class="sidebar-title">Kategori</h3>
                                    <ul class="mt-3">
                                        <?php $dta = mysqli_query($con, "SELECT id_kategori AS id_kategori, count(*) AS total FROM artikel GROUP BY id_kategori");
                                            $rsltcount = mysqli_fetch_array($dta);
                                            foreach ($dta as $result) : 
                                            $data = mysqli_query($con, "SELECT * FROM kategori WHERE id_kategori = ".$result['id_kategori']); foreach ($data as $row) : ?>
                                        <li><a href="detail_kategori.php?id_kategori=<?= $result['id_kategori'] ?>"><?= $row['kategori'] ?><span>
                                            <?= $result['total'] ?>
                                        </span></a></li>
                                        <?php endforeach; endforeach; ?>
                                    </ul>
                                </div><!-- End sidebar categories-->

                                <div class="sidebar-item recent-posts">
                                    <h3 class="sidebar-title">Artikel Terbaru</h3>

                                    <div class="mt-3">
                                        <?php $data = mysqli_query($con, "SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 10"); foreach ($data as $row) : ?>
                                        <div class="post-item mt-3">
                                            <img src="admin/img_artikel/<?= $row['gambar'] ?>" alt="">
                                            <div>
                                                <h4><a href="detail_artikel.php/id_artikel=<?= $row['id_artikel'] ?>"><?= $row['judul'] ?></a></h4>
                                                <time datetime="2020-01-01"><?= $row['tanggal'] ?></time>
                                            </div>
                                        </div><!-- End recent post item-->
                                        <?php endforeach; ?>

                                    </div>

                                </div><!-- End sidebar recent posts-->

                                <!-- <div class="sidebar-item tags">
                                    <h3 class="sidebar-title">Tags</h3>
                                    <ul class="mt-3">
                                        <li><a href="#">App</a></li>
                                        <li><a href="#">IT</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Mac</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Office</a></li>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Studio</a></li>
                                        <li><a href="#">Smart</a></li>
                                        <li><a href="#">Tips</a></li>
                                        <li><a href="#">Marketing</a></li>
                                    </ul>
                                </div>End sidebar tags -->

                            </div><!-- End Blog Sidebar -->

                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </section><!-- End Blog Details Section -->

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