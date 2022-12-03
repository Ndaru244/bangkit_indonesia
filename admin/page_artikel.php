<?php include '_header.php'; session_start(); ?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box mb-5">
        <h5 class="card-header">Data Artikel</h5>
        <div class="card-body">
            <h5 class="card-title">Lihat Data Artikel</h5>
            <!-- Alert -->
            <?php if (isset($_SESSION['sukses'])) {
                $message = $_SESSION['sukses']; ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">

                    <strong>Sukses!</strong><br> <?= $message ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php unset($_SESSION['sukses']);
            } ?>
            <!-- ./Alert -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
                Tambah Data Artikel
            </button>
            <div class="table-responsive-md mt-3">
                <table id="tabel-data" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Isi Artikel</th>
                            <th scope="col">Tanggal Terbit</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Kategori</th>
                            <th style="width: 15%;">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $data = mysqli_query($con, "SELECT * FROM artikel inner join kategori on artikel.id_kategori=kategori.id_kategori");
                        foreach ($data as $row) :  ?>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $row['judul'] ?></td>
                                <td><?= substr($row['artikel'], 0, 200) . '...' ?></td>
                                <td><?= $row['tanggal'] ?></td>
                                <td><img src="<?= "img_artikel/" . $row['gambar'] ?>" width="70" height="70"></td>
                                <td><?= $row['kategori'] ?></td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="artikel_edit.php?id_artikel=<?= $row['id_artikel'] ?>">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#modalDelete<?= $row['id_artikel'] ?>">Delete</a>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="modalDelete<?= $row['id_artikel'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Yakin ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Yakin Ingin Menghapus Artikel Yang Berjudul <b><?= $row['judul'] ?></b>?</p>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-danger " data-dismiss="modal">Batal</button>
                                                    <a href="artikel_delete.php?id_artikel=<?= $row['id_artikel'] ?>" class="btn btn-primary ">Ya, Saya Yakin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./Modal Delete -->
                                </td>
                            </tr>
                        <?php endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
</div>
<!-- ./content -->

<!-- Modal Add -->
<div class="modal fade bd-example-modal-lg" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="artikel_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                        <label for="">Isi Artikel</label>
                        <textarea id="summernote" name="artikel" class="form-control" required></textarea>
                        <label for="">Tanggal Terbit</label>
                        <input type="date" name="tanggal" class="form-control" required>
                        <label for="">Gambar</label><br>
                        <img id="preview" class="mb-2" src="#" alt="preview images" style="width: 20%;" />
                        <div class="input-group mb-3">
                            <!-- <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Pilih Gambar</span>
                            </div> -->
                            <div class="custom-file">
                                <input accept="image/*" type="file" name="gambar" id="imgInp" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                            </div>
                        </div>
                        <!-- 
                        <input type="file" name="gambar" class="form-control" required> -->
                        <label for="">Kategori</label>
                        <select multiple name="id_kategori" class="form-control" required>
                            <option value=0 selected>- Pilih Kategori -</option>
                            <?php
                            $tampil = mysqli_query($con, "SELECT * FROM kategori");
                            foreach ($tampil as $row) : ?>
                                <?php echo "<option value= $row[id_kategori]>$row[kategori] </option>"; ?>
                            <?php endforeach;
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ./Modal add -->


<?php include '_footer.php'; ?>