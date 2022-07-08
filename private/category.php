<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="index.php?page=category_add" class="btn btn-primary">Tambah</a>
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $r = mysqli_query($conn, "SELECT * FROM `category`");
                                while ($row = mysqli_fetch_array($r)) {

                                ?>
                                    <tr>
                                        <td><?= $row['category_id'] ?></td>
                                        <td><?= $row['category_name'] ?></td>
                                        <td>
                                            <a href="index.php?page=category_edit&id=<?= $row['category_id'] ?>" class="btn btn-block btn-outline-success">Edit</a>
                                            <a href="index.php?page=category_delete&id=<?= $row['category_id'] ?>" class="btn btn-block btn-outline-danger">Hapus</a>
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