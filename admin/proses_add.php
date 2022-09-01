<?php
include '_config.php';

$kategori = $_POST['kategori'];

$query = "INSERT INTO kategori(kategori)VALUES('$kategori')";
$result = mysqli_query($con, $query);

if ($result) { ?>
    <script>
        alert('Data berhasil ditambahkan!')
        location.href = 'page_kategori.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal ditambahkan!')
        location.href = 'page_kategori.php'
    </script>
<?php } ?>