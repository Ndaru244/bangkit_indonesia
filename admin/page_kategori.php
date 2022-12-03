<?php include '_header.php'; ?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box mb-5">
        <h5 class="card-header">Data Kategori</h5>
        <div class="card-body">
            <h5 class="card-title">Lihat Data Kategori</h5>
            <!-- Alert -->
            <?php if (isset($_SESSION['sukses'])) { $message = $_SESSION['sukses']; ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">

                    <strong>Sukses!</strong><br> <?= $message; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php unset($_SESSION['sukses']); } ?>
            <!-- ./Alert -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
                Tambah Data Kategori
            </button>
            <div class="table-responsive-md mt-3">
                <table id="tabel-data" class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kategori</th>
                            <th style="width: 15%;">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $data = mysqli_query($con, "SELECT * FROM kategori");
                        foreach ($data as $row) : ?>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $row['kategori'] ?></td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="kategori_edit.php?id_kategori=<?= $row['id_kategori'] ?>">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#modalDelete<?= $row['id_kategori'] ?>">Delete</a>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="modalDelete<?= $row['id_kategori'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Yakin ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Yakin Ingin Menghapus Data Kategori Yang Bernama <b><?= $row['kategori'] ?></b>?</p>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-danger " data-dismiss="modal">Batal</button>
                                                    <a href="kategori_delete.php?id_kategori=<?= $row['id_kategori'] ?>" name="submit" class="btn btn-primary ">Ya, Saya Yakin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./Modal Delete -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
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
                <h5 class="modal-title">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="page_kategori.php" method="POST">
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <input type="text" name="kategori" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <button type="reset" class="btn btn-block btn-danger " data-dismiss="modal">Close</button>
                            </div>
                            <div class="col">
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
include '_config.php';

if (isset($_POST['submit'])) {
    $kategori = $_POST['kategori'];

    $query = "INSERT INTO kategori(kategori)VALUES('$kategori')";
    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION['sukses'] = "Data berhasil ditambah.";
        echo "<script>window.location='page_kategori.php';</script>";
    } else {
        $_SESSION['gagal'] = "Data gagal ditambah.";
        echo "<script>window.location='page_kategori.php';</script>";
    }
}
include '_footer.php';
?>