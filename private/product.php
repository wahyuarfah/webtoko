<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="index.php?page=product_add" class="btn btn-primary">Tambah</a>
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
                                    <th>Deskripsi</th>
                                    <th>Category</th>
                                    <th>Foto</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                function categoryName($id)
                                {
                                    global $conn;
                                    $categoryName = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `category` WHERE `category_id` = '$id'"))['category_name'];
                                    return $categoryName;
                                }

                                $r = mysqli_query($conn, "SELECT * FROM `product`");
                                while ($row = mysqli_fetch_array($r)) {
                                ?>
                                    <tr>
                                        <td><?= $row['product_id'] ?></td>
                                        <td><?= $row['product_name'] ?></td>
                                        <td><?= $row['product_desc'] ?></td>
                                        <td><?= categoryName($row['product_category']) ?></td>
                                        <td><img width="80px" src="img/product/<?= $row['product_img'] ?>" alt="Italian Trulli"></td>
                                        <td><?= $row['product_stock'] ?></td>
                                        <td><?= $row['product_price'] ?></td>
                                        <td>
                                            <a href="index.php?page=product_edit&id=<?= $row['product_id'] ?>" class="btn btn-block btn-outline-success">Edit</a>
                                            <a href="index.php?page=product_delete&id=<?= $row['product_id'] ?>" class="btn btn-block btn-outline-danger">Hapus</a>
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