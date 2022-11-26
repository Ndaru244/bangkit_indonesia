<?php include '_config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Native</title>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
</head>
<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Bangkitkan Semangat Indonesia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if ($uriSegments[3] == "index.php") { echo "active"; } ?>">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item <?php if ($uriSegments[3] == "page_kategori.php") { echo "active"; } ?>">
                    <a class="nav-link" href="page_kategori.php">Kategori</a>
                </li>
                <li class="nav-item <?php if ($uriSegments[3] == "page_artikel.php") { echo "active"; } ?>">
                    <a class="nav-link" href="page_artikel.php">Artikel</a>
                </li>
                <li class="nav-item <?php if ($uriSegments[3] == "page_user.php") { echo "active"; } ?>">
                    <a class="nav-link" href="page_user.php">Galeri</a>
                </li>
                <li class="nav-item <?php if ($uriSegments[3] == "page_user.php") { echo "active"; } ?>">
                    <a class="nav-link" href="page_user.php">User</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ./navbar -->