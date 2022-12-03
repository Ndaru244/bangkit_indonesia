<?php
include '_config.php';
session_start();

$judul      = $_POST['judul'];
$artikel    = $_POST['artikel'];
$tanggal    = $_POST['tanggal'];
$gambar     = $_FILES['gambar']['name'];
$kategori   = $_POST['id_kategori'];

if ($gambar != "") {
    //upload dan simpan artikel
    $namafile = rand(0, 10) . "_" . str_replace(" ", "_", $_FILES['gambar']['name']);
    $tmp_name = $_FILES['gambar']['tmp_name'];

    $query = "INSERT INTO artikel(judul, artikel, tanggal, gambar, id_kategori) VALUES(
        '" . $judul . "',
        '" . $artikel . "',
        '" . $tanggal . "',
        '" . $namafile . "',
        '" . $kategori . "'
    )";

    $result = mysqli_query($con, $query);
    move_uploaded_file($tmp_name, 'img_artikel/' . $namafile);

    if (!$result) {
        $_SESSION['gagal'] = "Data gagal ditambah.";
        echo "<script>window.location='page_artikel.php';</script>";
    } else {
        $_SESSION['sukses'] = "Data berhasil ditambah.";
        echo "<script>window.location='page_artikel.php';</script>";
    }
}
?>