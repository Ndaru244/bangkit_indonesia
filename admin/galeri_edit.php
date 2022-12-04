<?php include '_header.php';
error_reporting(0);
?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box mb-5">
        <h5 class="card-header">Udah Data Artikel</h5>
        <div class="card-body">
            <h5 class="card-title">Form Edit Artikel</h5>
            <?php
            $id = $_GET['id'];
            $data = mysqli_query($con, "SELECT * FROM gallery WHERE id = '$id'");
            $row = mysqli_fetch_array($data); ?>
            <form action="galeri_edit.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
                    <div class="form-group">
                        <label for="">Gambar<br><small class="text-danger"><b>*Kosongkan jika tidak ingin mengubah data gambar</b></small></label><br>
                        <img id="preview" class="mb-2" src="<?= "img_gallery/" . $row['gambar'] ?>" style="width: 20%;">
                        <div class="custom-file">
                            <input accept="iamge/*" type="file" name="gambar" class="custom-file-input" id="imgInp" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan" class="form-control" rows="5"><?= $row['keterangan'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">User</label>
                        <select multiple name="id_user" class="form-control">
                            <?php
                            $tampil = mysqli_query($con, "SELECT * FROM users");
                            if ($row['nama_user'] == 0) {
                                echo "<option value=0>- Pilih Kategori -</option>";
                            }

                            while ($edit = mysqli_fetch_array($tampil)) {
                                if ($row['id_user'] == $edit['id_user']) {
                                    echo "<option value=$edit[id_user] selected>$edit[nama_user]</option>";
                                } else {
                                    echo "<option value=$edit[id_user]>$edit[nama_user]</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="update" class="btn btn-primary ">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ./content -->

<?php
include '_config.php';

if (isset($_POST['update'])) {
    $gambar     = $_FILES['gambar']['name'];
    $user       = $_POST['id_user'];
    $keterangan = $_POST['keterangan'];

    if ($gambar != "") {
        //upload dan simpan artikel
        $namafile = rand(0, 10) . "_" . str_replace(" ", "_", $_FILES['gambar']['name']);
        $tmp_name = $_FILES['gambar']['tmp_name'];

        $query = mysqli_query($con, "SELECT * FROM gallery WHERE id='$_POST[id]' ");
        $data = mysqli_fetch_assoc($query);
        unlink('img_gallery/' . $data['gambar']);

        $update = mysqli_query($con, "UPDATE gallery SET gambar ='$namafile', id_user='$user', keterangan='$keterangan' WHERE id ='$_POST[id]'");

        move_uploaded_file($tmp_name, 'img_gallery/' . $namafile);

        if (!$update) {
            $_SESSION['gagal'] = "Data gagal diubah.";
            echo "<script>window.location='page_galeri.php';</script>";
        } else {
            $_SESSION['sukses'] = "Data berhasil diubah.";
            echo "<script>window.location='page_galeri.php';</script>";
        }
    } else {
        $update = mysqli_query($con, "UPDATE gallery SET id_user='$user', keterangan='$keterangan' WHERE id ='$_POST[id]'");
        if ($update) {
            $_SESSION['sukses'] = "Data berhasil diubah.";
            echo "<script>window.location='page_galeri.php';</script>";
        } else {
            $_SESSION['gagal'] = "Data gagal diubah.";
            echo "<script>window.location='page_galeri.php';</script>";
        }
    }
}

include '_footer.php'; ?>