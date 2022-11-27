<?php
include '_config.php';

$id_user = isset($_POST['id_user']);
$nama = isset($_POST['nama_user']);
$username = isset($_POST['username']);
$password = isset($_POST['password']);

date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s');

$query = "UPDATE user SET nama_user='$nama', username='$username', password='$password' WHERE id_user = '$id_user'";
$result = mysqli_query($con, $query);

if ($result) { ?>
    <script>
        alert('Data berhasil diubah!')
        location.href = 'page_user.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal diubah!')
        location.href = 'page_user.php'
    </script>
<?php } ?>