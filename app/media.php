<?php if (!isset($_GET['act'])) { ?>

    <div class="fixed-action-btn" id="" style="display:true">
        <a class="btn-floating btn-large" href="index.php?page=media&act=add">
            <i class="large material-icons">add</i>
        </a>
    </div>
    <span class="card-title dark4">Media</span>
    <div class="table_responsive" id="table_media">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th><a class="column_sort" id="media_id" data-order="desc" href="#">ID</a></th>
                    <th><a class="column_sort" id="media_title" data-order="desc" href="#">Judul</a></th>
                    <th> <a class="column_sort" id="media_desc" data-order="desc" href="#">Deskripsi</a></th>
                    <th> <a class="column_sort" id="media_link" data-order="desc" href="#">Link</a></th>
                    <th> <a class="column_sort" id="media_seen" data-order="desc" href="#">Dilihat (x)</a></th>
                    <th> <a class="column_sort" id="media_thumb" data-order="desc" href="#">Gambar</a></th>
                    <th> <a class="column_sort" id="update_at" data-order="desc" href="#">Update</a></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = "SELECT * FROM media ORDER BY media_seen DESC";
                $dewan1 = $db1->prepare($query);
                $dewan1->execute();
                $res1 = $dewan1->get_result();
                while ($row = $res1->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row["media_title"]; ?></td>
                        <td><?php echo $row["media_desc"]; ?></td>
                        <td><a href="<?= $row["media_link"]; ?>">Click </a></td>
                        <td><?php echo $row["media_seen"]; ?></td>
                        <td><img src="img/media/<?= $row['media_thumb'] ?>" style='height:100px;' alt="<?= $row['media_img'] ?>"></td>
                        <td><?php echo $row["update_at"]; ?></td>
                        <td>
                            <a href='index.php?page=media&act=edit&id=<?= $row["media_id"] ?>' class='btn btn-primary'>Edit</a>
                            <a href='index.php?page=media&act=delete&id=<?= $row["media_id"] ?>' onclick='return confirm("Are you sure?")' class='btn bg-danger'>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
<?php
} elseif ($_GET['act'] == 'delete') {
    if (deleteItem($_GET['id'], "media")) {
        echo "<script>window.alert('Delete Success');
        window.location='index.php?page=media'</script>";
    } else echo "<script>window.alert('Delete Failed');
        window.location='index.php?page=media'</script>";
} elseif ($_GET['act'] == 'add') {
    if (isset($_POST["submit"])) {
        //cek apakah file udah masuk
        if (addMedia($_POST) > 0) {
            echo "		
            <script>
                alert('Data Media Berhasil Ditambahkan');
                document.location.href = 'index.php?page=media';
            </script>
        ";
        } else {
            echo "
            <script>
                alert('Data Media Gagal Ditambahkan');
                document.location.href = 'index.php?page=media';
            </script>
        ";
        }
    }

?>
    <span class="card-title">Tambahkan Media</span>

    <div class="row">
        <form action='' method="POST" class="col s12 no-padding" enctype="multipart/form-data">
            <div class="row no-margin">
                <div class="input-field col s12">
                    <input id="media_title" name="media_title" type="text" required autofocus>
                    <label for="media_title" class="">Judul Media</label>
                </div>
                <div class="input-field col s12">
                    <input id="media_desc" name="media_desc" type="text" required>
                    <label for="media_desc" class="">Deskripsi Media</label>
                </div>
                <div class="input-field col s12">
                    <input id="media_link" name="media_link" type="text" required>
                    <label for="media_link" class="">Link Media</label>
                </div>
                <div class="btn default">
                    <span>Gambar Media (.jpg, .jpeg, .png)</span>
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
        if (updateMedia($_POST) > 0) {
            echo "		
            <script>
                alert('Data Media Berhasil Diupdate');
                document.location.href = 'index.php?page=media';
            </script>
        ";
        } else {
            echo "
            <script>
                alert('Data Media Gagal Diupdate');
                document.location.href = 'index.php?page=media';
            </script>
        ";
        }
    }
    $item = mysqli_fetch_array(getItem('media', $_GET['id']));
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
                    <input id="media_title" name="media_title" type="text" required autofocus value="<?= $item['media_title'] ?>">
                    <label for="media_title" class="">Judul Media</label>
                </div>
                <div class="input-field col s12">
                    <input id="media_desc" name="media_desc" type="text" required value="<?= $item['media_desc'] ?>">
                    <label for="media_desc" class="">Deskripsi Media</label>
                </div>
                <div class="input-field col s12">
                    <input id="media_link" name="media_link" type="text" required value="<?= $item['media_link'] ?>">
                    <label for="media_link" class="">Link Media</label>
                </div>
                <div class="btn default">
                    <span>Gambar Media (.jpg, .jpeg, .png)</span>
                    <input id="gambar" name="gambar" type="file">
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