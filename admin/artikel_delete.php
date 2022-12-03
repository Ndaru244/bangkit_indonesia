<?php
include '_config.php';
session_start();

$id_artikel = $_GET['id_artikel'];

$query = mysqli_query($con,"SELECT * FROM artikel WHERE id_artikel='$id_artikel' ");
$data = mysqli_fetch_assoc($query);
unlink('img_artikel/' . $data['gambar']);

$delete = mysqli_query($con, "DELETE FROM artikel WHERE id_artikel = $id_artikel");

if ($delete) {
    $_SESSION['sukses'] = "Data berhasil dihapus.";
    echo "<script>window.location='page_artikel.php';</script>";
} else {
    $_SESSION['gagal'] = "Data gagal dihapus.";
    echo "<script>window.location='page_artikel.php';</script>";
}