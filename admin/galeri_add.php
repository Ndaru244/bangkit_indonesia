<?php
include '_config.php';
session_start();

$gambar     = $_FILES['gambar']['name'];
$user       = $_POST['id_user'];
$keterangan = $_POST['keterangan'];

if ($gambar != "") {
    //upload dan simpan artikel
    $namafile = rand(0, 10) . "_" . str_replace(" ", "_", $_FILES['gambar']['name']);
    $tmp_name = $_FILES['gambar']['tmp_name'];
    
    $query = "INSERT INTO gallery(gambar, id_user, keterangan ) VALUES(
        '" . $namafile . "',
        '" . $user . "',
        '" . $keterangan . "'
    )";

    $result = mysqli_query($con, $query);
    move_uploaded_file($tmp_name, 'img_gallery/' . $namafile);
    if (!$result) {
        $_SESSION['gagal'] = "Data gagal ditambah.";
        echo "<script>window.location='page_galeri.php';</script>";
    } else {
        $_SESSION['sukses'] = "Data berhasil ditambah.";
        echo "<script>window.location='page_galeri.php';</script>";
    }
}