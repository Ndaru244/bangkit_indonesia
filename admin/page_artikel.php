<?php include '_header.php'; ?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Data Artikel</h5>
        <div class="card-body">
            <h5 class="card-title">Lihat Data Artikel</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
                Tambah Data Artikel
            </button>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi Artikel</th>
                        <th scope="col">Tanggal Terbit</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Kategori</th>
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
                                <a class="badge badge-success" href="artikel_edit.php?id_artikel=<?= $row['id_artikel'] ?>">Edit</a>
                                <a class="badge badge-danger" href="artikel_delete.php?id_artikel=<?= $row['id_artikel'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- ./content -->

<!-- Modal Add -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="artikel_add.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                        <label for="">Isi Artikel</label>
                        <textarea rows="15" cols="100" name="artikel" class="form-control" required></textarea>
                        <label for="">Tanggal Terbit</label>
                        <input type="date" name="tanggal" class="form-control" required>
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" class="form-control" required>
                        <label for="">Kategori</label>
                        <select name="id_kategori" class="form-control" required>
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
                        <button type="button" class="btn btn-danger " data-dismiss="modal" onclick="self.history.back()">Close</button>
                        <button type="submit" name="upload" class="btn btn-primary ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ./Modal add -->


<?php include '_footer.php'; ?>