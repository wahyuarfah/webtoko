<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="index.php?page=users_add" class="btn btn-primary">Tambah User</a>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $r = mysqli_query($conn, "SELECT * FROM `users`");
                                while ($row = mysqli_fetch_array($r)) {
                                ?>
                                    <tr>
                                        <td><?= $row['users_id'] ?></td>
                                        <td><?= $row['users_name'] ?></td>
                                        <td><?= $row['users_email'] ?></td>
                                        <td>
                                            <a href="index.php?page=users_edit&id=<?= $row['users_id'] ?>" class="btn btn-block btn-outline-success">Edit</a>
                                            <a href="index.php?page=users_delete&id=<?= $row['users_id'] ?>" class="btn btn-block btn-outline-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>