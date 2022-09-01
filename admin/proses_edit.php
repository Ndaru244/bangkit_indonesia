<?php
include '_config.php';

$id_kategori = $_POST['id_kategori'];
$kategori = $_POST['kategori'];

date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s');

$update = mysqli_query($con, "UPDATE kategori SET kategori= '$kategori' WHERE id_kategori = '$id_kategori'");

if ($update) { ?>
    <script>
        alert('Data berhasil diubah!')
        location.href = 'page_kategori.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal diubah!')
        location.href = 'page_kategori.php'
    </script>
<?php } ?>