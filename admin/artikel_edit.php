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
            $id_artikel = $_GET['id_artikel'];
            $data = mysqli_query($con, "SELECT * FROM artikel WHERE id_artikel = '$id_artikel'");

            $row = mysqli_fetch_array($data); ?>
            <form action="artikel_edit.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id_artikel" class="form-control" value="<?= $row['id_artikel'] ?>">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" value="<?= $row['judul'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Isi Artikel</label>
                        <textarea id="summernote" name="artikel" class="form-control"><?= $row['artikel'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= $row['tanggal'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Gambar<br><small class="text-danger"><b>*Kosongkan jika tidak ingin mengubah data gambar</b></small></label><br>
                        <img id="preview" class="mb-2" src="<?= "img_artikel/" . $row['gambar'] ?>" style="width: 20%;">
                        <div class="custom-file">
                            <input accept="iamge/*" type="file" name="gambar" class="custom-file-input" id="imgInp" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select multiple name="kategori" class="form-control">
                            <?php
                            $tampil = mysqli_query($con, "SELECT * FROM kategori");
                            if ($row['kategori'] == 0) {
                                echo "<option value=0>- Pilih Kategori -</option>";
                            }

                            while ($edit = mysqli_fetch_array($tampil)) {
                                if ($row['id_kategori'] == $edit['id_kategori']) {
                                    echo "<option value=$edit[id_kategori] selected>$edit[kategori]</option>";
                                } else {
                                    echo "<option value=$edit[id_kategori]>$edit[kategori]</option>";
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
    $judul      = $_POST['judul'];
    $artikel    = $_POST['artikel'];
    $tanggal    = $_POST['tanggal'];
    $gambar     = $_FILES['gambar']['name'];
    $kategori   = $_POST['kategori'];

    if ($gambar != "") {
        //upload dan simpan artikel
        $namafile = rand(0, 10) . "_" . str_replace(" ", "_", $_FILES['gambar']['name']);
        $tmp_name = $_FILES['gambar']['tmp_name'];

        $query = mysqli_query($con, "SELECT * FROM artikel WHERE id_artikel='$_POST[id_artikel]' ");
        $data = mysqli_fetch_assoc($query);
        unlink('img_artikel/' . $data['gambar']);

        $update = mysqli_query($con, "UPDATE artikel SET judul ='$judul', artikel='$artikel', tanggal='$tanggal', gambar='$namafile', id_kategori='$kategori' WHERE id_artikel ='$_POST[id_artikel]'");

        move_uploaded_file($tmp_name, 'img_artikel/' . $namafile);

        if (!$update) {
            $_SESSION['gagal'] = "Data gagal diubah.";
            echo "<script>window.location='page_artikel.php';</script>";
        } else {
            $_SESSION['sukses'] = "Data berhasil diubah.";
            echo "<script>window.location='page_artikel.php';</script>";
        }
    } else {
        $update = mysqli_query($con, "UPDATE artikel SET judul ='$judul', artikel='$artikel', tanggal='$tanggal', id_kategori='$kategori' WHERE id_artikel ='$_POST[id_artikel]'");
        if ($update) {
            $_SESSION['sukses'] = "Data berhasil diubah.";
            echo "<script>window.location='page_artikel.php';</script>";
        } else {
            $_SESSION['gagal'] = "Data gagal diubah.";
            echo "<script>window.location='page_artikel.php';</script>";
        }
    }
}

include '_footer.php'; ?>