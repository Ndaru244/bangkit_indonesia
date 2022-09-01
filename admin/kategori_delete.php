<?php
include '_config.php';

$id_kategori = $_GET['id_kategori'];

$delete = mysqli_query($con, "DELETE FROM kategori WHERE id_kategori = $id_kategori");

if ($delete) { ?>
    <script>
        alert('Data berhasil dihapus!')
        location.href = 'page_kategori.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal dihapus!')
        location.href = 'page_kategori.php'
    </script>
<?php } ?>