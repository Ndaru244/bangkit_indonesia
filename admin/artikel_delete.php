<?php
include '_config.php';

$id_artikel = $_GET['id_artikel'];

$delete = mysqli_query($con, "DELETE FROM artikel WHERE id_artikel = $id_artikel");

if ($delete) { ?>
    <script>
        alert('Data berhasil dihapus!')
        location.href = 'page_artikel.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal dihapus!')
        location.href = 'page_artikel.php'
    </script>
<?php } ?>