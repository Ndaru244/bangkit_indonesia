<?php include '_header.php'; ?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Data user</h5>
        <div class="card-body">
            <h5 class="card-title">Lihat Data user</h5>
            <!-- Alert -->
            <?php if (isset($_SESSION['sukses'])) {
                $message = $_SESSION['sukses']; ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sukses!</strong><br> <?= $message; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php unset($_SESSION['sukses']);
            } else if (isset($_SESSION['gagal'])) {
            $message = $_SESSION['gagal'];
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal!</strong><br> <?= $message; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php unset($_SESSION['gagal']);
            } ?>
            <!-- ./Alert -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
                Tambah Data user
            </button>
            <div class="table-responsive-md mt-3">
                <table id="tabel-data" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th style="width: 15%;">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $data = mysqli_query($con, "SELECT * FROM users");
                        foreach ($data as $row) : ?>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $row['nama_user'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['password'] ?></td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="user_edit.php?id_user=<?= $row['id_user'] ?>">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#modalDelete<?= $row['id_user'] ?>">Delete</a>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="modalDelete<?= $row['id_user'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Yakin ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Yakin Ingin Menghapus User Yang Bernama <b><?= $row['nama_user'] ?></b>?</p>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-danger " data-dismiss="modal">Batal</button>
                                                    <a href="user_delete.php?id_user=<?= $row['id_user'] ?>" name="submit" class="btn btn-primary ">Ya, Saya Yakin</a>
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
                <h5 class="modal-title">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="page_user.php" method="POST">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_user" class="form-control" required>
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <label for="">Password</label>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" id="password">
                            <div class="input-group-append" onclick="password_show_hide();">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-eye-slash" id="show_eye"></i>
                                    <i class="fa-solid fa-eye d-none" id="hide_eye"></i>
                                </div>
                            </div>
                        </div>
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
include '_config.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_user'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT,);
    $uname = strtolower($username);
    if (preg_match('/^[a-z\d_]{2,20}$/i', $uname)) {
        $query = "INSERT INTO users (nama_user, username, password) VALUES ('$nama', '$uname', '$password')";
        $result = mysqli_query($con, $query);

        if ($result) {
            $_SESSION['sukses'] = "Data berhasil ditambah.";
            echo "<script>window.location='page_user.php';</script>";
        } else {
            $_SESSION['gagal'] = "Data gagal ditambah.";
            die("Query gagal dijalankan: " . mysqli_errno($con) . " - " . mysqli_error($con));

            echo "<script>window.location='page_user.php';</script>";
        }
    } else {
        $_SESSION['gagal'] = "Username tidak boleh menggunakan <b>'spasi'</b> dan hanya boleh menggunakan karakter <b>'_'</b>.";
        echo "<script>window.location='page_user.php';</script>";
    }
}

include '_footer.php'; ?>