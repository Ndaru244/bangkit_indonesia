<?php include '_header.php'; session_start(); error_reporting(0); ?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Udah Data kategori</h5>
        <div class="card-body">
            <h5 class="card-title">Form Edit Kategori</h5>

            <?php
            $id_kategori = $_GET['id_kategori'];
            $kategori = isset($_GET['kategori']);
            $data = mysqli_query($con, "SELECT * FROM kategori WHERE id_kategori = '$id_kategori'");
            $row = mysqli_fetch_array($data); ?>

            <form action="kategori_edit.php" method="POST">
                <input type="hidden" name="id_kategori" class="form-control" value="<?= $row['id_kategori'] ?>">
                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" name="kategori" class="form-control" id="kategori" value="<?= $row['kategori'] ?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ./content -->
<?php
if (isset($_POST['submit'])) {
    $id_kategori = $_POST['id_kategori'];
    $kategori = $_POST['kategori'];
    $update = mysqli_query($con, "UPDATE kategori SET kategori= '$kategori' WHERE id_kategori = '$id_kategori'");

    if ($update) {
        $_SESSION['sukses'] = "Data berhasil diubah.";
        echo "<script>window.location='page_kategori.php';</script>";
    } else {
        $_SESSION['gagal'] = "Data gagal diubah.";
        echo "<script>window.location='page_kategori.php';</script>";
    }
}
include '_footer.php';
