<?php include '_config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Native</title>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <!-- popperjs -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
    <!-- include summernote css/js-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>
<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>

<body>
    <!-- navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand" href="#">Bangkitkan Semangat Indonesia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if ($uriSegments[3] == "index.php") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item <?php if ($uriSegments[3] == "page_kategori.php") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link" href="page_kategori.php">Kategori</a>
                </li>
                <li class="nav-item <?php if ($uriSegments[3] == "page_artikel.php") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link" href="page_artikel.php">Artikel</a>
                </li>
                <li class="nav-item <?php if ($uriSegments[3] == "page_user.php") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link" href="page_user.php">Galeri</a>
                </li>
                <li class="nav-item <?php if ($uriSegments[3] == "page_user.php") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link" href="page_user.php">User</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ./navbar -->