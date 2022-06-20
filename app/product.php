<?php if (!isset($_GET['act'])) { ?>

    <div class="fixed-action-btn" id="" style="display:true">
        <a class="btn-floating btn-large" href="index.php?page=product&act=add">
            <i class="large material-icons">add</i>
        </a>
    </div>
    <span class="card-title dark4">Produk</span>
    <div class="table_responsive" id="table_product">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th><a class="column_sort" id="product_id" data-order="desc" href="#">ID</a></th>
                    <th><a class="column_sort" id="product_name" data-order="desc" href="#">Nama</a></th>
                    <th> <a class="column_sort" id="product_desc" data-order="desc" href="#">Deskripsi</a></th>
                    <th> <a class="column_sort" id="product_category" data-order="desc" href="#">Kategori</a></th>
                    <th> <a class="column_sort" id="product_img" data-order="desc" href="#">Gambar</a></th>
                    <th> <a class="column_sort" id="product_stock" data-order="desc" href="#">Stok</a></th>
                    <th> <a class="column_sort" id="product_price" data-order="desc" href="#">Harga</a></th>
                    <th> <a class="column_sort" id="product_seen" data-order="desc" href="#">Dilihat</a></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = "SELECT * FROM product ORDER BY product_name ASC";
                $dewan1 = $db1->prepare($query);
                $dewan1->execute();
                $res1 = $dewan1->get_result();
                while ($row = $res1->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row["product_name"]; ?></td>
                        <td><?php echo $row["product_desc"]; ?></td>
                        <td><?php echo productCategory($row["product_category"]); ?></td>
                        <td><img src="img/product/<?= $row['product_img'] ?>" style='height:100px;' alt="<?= $row['product_img'] ?>"></td>
                        <td><?php echo $row["product_stock"]; ?></td>
                        <td><?php echo rupiah($row["product_price"]); ?></td>
                        <td><?php echo $row["product_seen"]; ?></td>
                        <td>
                            <a href='index.php?page=product&act=edit&id=<?= $row['product_id'] ?>' class='btn btn-primary'>Edit</a>
                            <a href='index.php?page=product&act=delete&id=<?= $row['product_id'] ?>' onclick='return confirm("Are you sure?")' class='btn bg-danger'>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
<?php
} elseif ($_GET['act'] == 'delete') {
    if (deleteItem($_GET['id'], "product")) {
        echo "<script>window.alert('Delete Success');
            window.location='index.php?page=product'</script>";
    } else echo "<script>window.alert('Delete Failed');
            window.location='index.php?page=product'</script>";
} elseif ($_GET['act'] == 'add') {
    if (isset($_POST["submit"])) {
        //cek apakah file udah masuk
        if (addProduct($_POST) > 0) {
            echo "		
                <script>
                    alert('Data Produk Berhasil Ditambahkan');
                    document.location.href = 'index.php?page=product';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Produk Gagal Ditambahkan');
                    document.location.href = 'index.php?page=product';
                </script>
            ";
        }
    }

?>
    <span class="card-title">Tambahkan Produk</span>

    <div class="row">
        <form action='' method="POST" class="col s12 no-padding" enctype="multipart/form-data">
            <div class="row no-margin">
                <div class="input-field col s12">
                    <input id="product_name" name="product_name" type="text" required autofocus>
                    <label for="product_name" class="">Nama Produk</label>
                </div>
                <div class="input-field col s12">
                    <input id="product_desc" name="product_desc" type="text" required>
                    <label for="product_desc" class="">Deskripsi Produk</label>
                </div>
                <div class="col s12">
                    <select id="product_category" name="product_category" required>
                        <?php
                        $data = getTable('category');
                        while ($r = mysqli_fetch_array($data)) {
                            echo "<option  value='$r[category_id]'>$r[category_name]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="input-field col s12">
                    <input id="product_stock" name="product_stock" type="number" required>
                    <label for="product_stock" class="">Stok Produk</label>
                </div>
                <div class="input-field col s12">
                    <input id="product_price" name="product_price" type="number" required>
                    <label for="product_price" class="">Harga Produk</label>
                </div>
                <div class="btn default">
                    <span>Gambar Produk (.jpg, .jpeg, .png)</span>
                    <input id="gambar" name="gambar" type="file">
                </div>
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light right default" type="submit" name="submit">Submit <i class="material-icons right">send</i></button>
                </div>
            </div>
        </form>
    </div>
<?php } elseif ($_GET['act'] == 'edit') {

    if (isset($_POST['update'])) {
        if (updateProduct($_POST) > 0) {
            echo "		
                <script>
                    alert('Data Produk Berhasil Diupdate');
                    document.location.href = 'index.php?page=product';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Produk Gagal Diupdate');
                    document.location.href = 'index.php?page=product';
                </script>
            ";
        }
    }
    $item = mysqli_fetch_array(getItem('product', $_GET['id']));
    function selected($a, $b)
    {
        if ($a == $b) return "selected";
        else return "";
    }
?>
    <span class="card-title">Edit Produk</span>
    <div class="row">
        <form action='' method="POST" class="col s12 no-padding" enctype="multipart/form-data">
            <div class="row no-margin">
                <div class="input-field col s12">
                    <input id="product_name" name="product_name" type="text" value="<?= $item['product_name'] ?>" required autofocus>
                    <label for="product_name" class="">Nama Produk</label>
                </div>
                <div class="input-field col s12">
                    <input id="product_desc" name="product_desc" type="text" value="<?= $item['product_desc'] ?>" required>
                    <label for="product_desc" class="">Deskripsi Produk</label>
                </div>
                <div class="col s12">
                    <select id="product_category" name="product_category" required>
                        <?php
                        $data = getTable('category');
                        while ($r = mysqli_fetch_array($data)) {
                            echo "<option " . selected($item['product_category'], $r['category_id']) . " value='$r[category_id]'>$r[category_name]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="input-field col s12">
                    <input id="product_stock" name="product_stock" type="number" value="<?= $item['product_stock'] ?>" required>
                    <label for="product_stock" class="">Stok Produk</label>
                </div>
                <div class="input-field col s12">
                    <input id="product_price" name="product_price" type="number" value="<?= $item['product_price'] ?>" required>
                    <label for="product_price" class="">Harga Produk</label>
                </div>
                <div class="btn default">
                    <span>Gambar Produk (.jpg, .jpeg, .png)</span>
                    <input id="gambar" name="gambar" type="file" value="<?= $item['product_img'] ?>">
                </div>
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light right default" type="submit" name="update">Update <i class="material-icons right">send</i></button>
                </div>
            </div>
        </form>
    </div>
<?php } ?>

<script>
    $(document).ready(function() {
        $(document).on('click', '.column_sort', function() {
            var nama_kolom = $(this).attr("id");
            var order = $(this).data("order");
            var arrow = '';
            if (order == 'desc') {
                arrow = '&nbsp;<span class="fa fa-arrow-down"></span>';
            } else {
                arrow = '&nbsp;<span class="fa fa-arrow-up"></span>';
            }
            $.ajax({
                url: "sort.php",
                method: "POST",
                data: {
                    nama_kolom: nama_kolom,
                    order: order
                },
                success: function(data) {
                    $('#table_product').html(data);
                    $('#' + nama_kolom + '').append(arrow);
                }
            })
        });
    });
</script>