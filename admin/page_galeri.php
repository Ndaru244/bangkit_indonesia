<?php
include '_header.php';
?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box mb-5">
        <h5 class="card-header">Data galeri</h5>
        <div class="card-body">
            <h5 class="card-title">Lihat Data galeri</h5>
            <!-- Alert -->
            <?php if (isset($_SESSION['sukses'])) {
                $message = $_SESSION['sukses']; ?>
                <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">

                    <strong>Sukses!</strong><br> <?= $message ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php unset($_SESSION['sukses']);
            } ?>
            <!-- ./Alert -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
                Tambah Data galeri
            </button>
            <div class="table-responsive-md mt-3">
                <table id="tabel-data" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th style="width: 15%;">Gambar</th>
                            <th scope="col">User</th>
                            <th scope="col">keterangan</th>
                            <th style="width: 15%;">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $data = mysqli_query($con, "SELECT * FROM gallery inner join users on gallery.id_user=users.id_user");
                        foreach ($data as $row) :
                        ?>
                        <tr>
                            <th><?= $i++ ?></th>
                            <td><img src="<?= "img_gallery/" . $row['gambar'] ?>" width="100"></td>
                            <td><?= $row['nama_user'] ?></td>
                            <td><?= $row['keterangan'] ?></td>
                            <td>
                            <a class="btn btn-sm btn-success" href="galeri_edit.php?id=<?= $row['id'] ?>">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#modalDelete<?= $row['id'] ?>">Delete</a>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="modalDelete<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Yakin ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Yakin Ingin Menghapus Gambar Ini?</p>
                                                    <img src="<?= "img_gallery/" . $row['gambar'] ?>" width="auto" class="rounded mx-auto d-block img-fluid">

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-danger " data-dismiss="modal">Batal</button>
                                                    <a href="galeri_delete.php?id=<?= $row['id'] ?>" class="btn btn-primary ">Ya, Saya Yakin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./Modal Delete -->
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ./content -->


<!-- Modal Add -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Galeri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="galeri_add.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Gambar</label><br>
                        <img id="preview" class="mb-2" src="#" alt="preview images" style="width: 20%;" />
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input accept="image/*" type="file" name="gambar" id="imgInp" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                            </div>
                        </div>
                        <label for="">User</label>
                        <select multiple class="form-control" required name="id_user">
                            <option>- Pilih User -</option>
                            <?php
                            $tampil = mysqli_query($con, "SELECT * FROM users");
                            foreach ($tampil as $row) : ?>
                                <option value="<?= $row['id_user'] ?>" <?= $_SESSION['user_id'] != $row['id_user'] ? '' : 'selected'; ?>>
                                    <?= $row['nama_user'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                        <label for="">Keterangan</label>
                        <textarea name="keterangan" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-block btn-danger " data-dismiss="modal">Close</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" name="submit" class="btn btn-block btn-primary ">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ./Modal add -->
<?php
include '_footer.php';
?>