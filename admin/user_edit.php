<?php include '_header.php';
// error_reporting(0); 
?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Udah Data User</h5>
        <div class="card-body">
            <h5 class="card-title">Form Edit User</h5>
            <!-- Alert -->
            <?php if (isset($_SESSION['gagal'])) {
                $message = $_SESSION['gagal']; ?>
                <div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert">
                    <strong>Gagal!</strong><br> <?= $message; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php 
            } unset($_SESSION['gagal']); ?>
            <!-- ./Alert -->

            <?php
            $id_user = $_GET['id_user'];
            $data = mysqli_query($con, "SELECT * FROM users WHERE id_user = '$id_user'");
            $row = mysqli_fetch_array($data); ?>
            <form action="user_edit.php?id_user=<?= $row['id_user'] ?>" method="POST">
                <input type="hidden" name="id_user" class="form-control" value="<?= $row['id_user'] ?>">
                <div class="form-group ">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_user" class="form-control" value="<?= $row['nama_user'] ?>">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control mt-2" value="<?= $row['username'] ?>">
                    <br><small class="text-danger"><b>*Kosongkan jika tidak ingin mengubah Password</b></small>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="">Password Lama</label>
                            <input type="password" name="password_lama" class="form-control">
                        </div>
                        <div class="col">
                            <label for="">Password Baru</label>
                            <input type="password" name="password_baru" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary ">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- ./content -->
<?php
include '_config.php';
if (isset($_POST['submit'])) {
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama_user'];
    $username = $_POST['username'];
    $pass_lama = $_POST['password_lama'];
    $pass_baru = password_hash($_POST['password_baru'], PASSWORD_DEFAULT,);
    $uname = strtolower($username);
    if ($pass_lama != '') {
        if (preg_match('/^[a-z\d_]{2,20}$/i', $uname)) {
            if (password_verify($pass_lama, $row['password'])) {
                $update = mysqli_query($con, "UPDATE users SET nama_user= '$nama', username='$username',password='$pass_baru' WHERE id_user = '$id_user'");
                if ($update) {
                    $_SESSION['sukses'] = "Data berhasil diubah.";
                    echo "<script>window.location='page_user.php';</script>";
                } else {
                    $_SESSION['gagal'] = "Data gagal diubah.";
                    echo "<script>window.location='page_user.php';</script>";
                }
            } else {
                $_SESSION['gagal'] = "Password Lama Salah.";
    
                echo "<script>window.location='user_edit.php?id_user=$id_user';</script>";
            }
        } else {
            $_SESSION['gagal'] = "Username tidak boleh menggunakan <b>'spasi'</b> dan hanya boleh menggunakan karakter <b>'_'</b>.";
            echo "<script>window.location='user_edit.php?id_user=$id_user';</script>";
        }
    } else {
        $update = mysqli_query($con, "UPDATE users SET nama_user= '$nama', username='$username' WHERE id_user = '$id_user'");
        if ($update) {
            $_SESSION['sukses'] = "Data berhasil diubah.";
            echo "<script>window.location='page_user.php';</script>";
        } else {
            $_SESSION['gagal'] = "Data gagal diubah.";
            echo "<script>window.location='page_user.php';</script>";
        }
    }
}
include '_footer.php'; ?>