<?php
error_reporting(0);
include '_config.php';

$judul = $_POST['judul'];
$artikel = $_POST['artikel'];
$tanggal = $_POST['tanggal'];
$gambar = $_POST['gambar'];
$kategori = $_POST['id_kategori'];

//upload dan simpan artikel
$namafile = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp_name, 'img_artikel/' . $namafile);

$update = mysqli_query($con, "UPDATE artikel SET judul ='$_POST[judul]', artikel='$_POST[artikel]', tanggal='$_POST[tanggal]', gambar='$namafile', id_kategori='$_POST[kategori]' WHERE id_artikel ='$_POST[id_artikel]'");

//if (empty('gambar')) {
//  $update = mysqli_query($con, "UPDATE artikel SET judul ='$_POST[judul]', artikel='$_POST[artikel]', tanggal='$_POST[tanggal]', gambar='$gambar', id_kategori='$_POST[kategori]' WHERE id_artikel ='$_POST[id_artikel]'");
//} else {
//   $UploadImage($nama_file);
//  $update = mysqli_query($con, "UPDATE artikel SET judul ='$_POST[judul]', artikel='$_POST[artikel]', tanggal='$_POST[tanggal]', gambar='$namafile', id_kategori='$_POST[kategori]' WHERE id_artikel ='$_POST[id_artikel]'");
//}
if ($update) { ?>
    <script>
        alert('Data berhasil diubah!')
        location.href = 'page_artikel.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal diubah!')
        location.href = 'page_artikel.php'
    </script>
<?php } ?>