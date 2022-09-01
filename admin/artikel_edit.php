<?php include '_header.php';
error_reporting(0);
?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Udah Data Artikel</h5>
        <div class="card-body">
            <h5 class="card-title">Form Edit Artikel</h5>

            <?php
            $id_artikel = $_GET['id_artikel'];
            $judul = $_GET['judul'];
            $artikel = $_GET['artikel'];
            $tanggal = $_GET['tanggal'];
            $gambar = $_GET['gambar'];
            $kategori = $_GET['id_kategori'];
            $data = mysqli_query($con, "SELECT * FROM artikel WHERE id_artikel = '$id_artikel'");

            $row = mysqli_fetch_array($data); ?>
            <form action="proses_artikel_edit.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id_artikel" class="form-control" value="<?= $row['id_artikel'] ?>">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" value="<?= $row['judul'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Isi Artikel</label>
                        <textarea rows="15" cols="100" name="artikel" class="ckeditor" class="form-control" id="artikel"><?= $row['artikel'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= $row['tanggal'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label><br>
                        <img src="<?= "img_artikel/" . $row['gambar'] ?>" width="70" height="70">
                        <input name="gambar" type="file" id="gambar" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="kategori" class="form-control">
                            <?php
                            $tampil = mysqli_query($con, "SELECT * FROM kategori ORDER BY kategori");
                            if ($row['kategori'] == 0) {
                                echo "<option value=0 selected>- Pilih Kategori -</option>";
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
<?php include '_footer.php'; ?>