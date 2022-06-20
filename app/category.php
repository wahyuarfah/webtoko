<?php if (!isset($_GET['act'])) { ?>

    <div class="fixed-action-btn" id="" style="display:true">
        <a class="btn-floating btn-large" href="index.php?page=category&act=add">
            <i class="large material-icons">add</i>
        </a>
    </div>

    <span class="card-title dark4">Kategori</span>
    <table class="responsive-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = getTable("category");
            $no = 1;
            while ($i = mysqli_fetch_array($data)) {
                echo "<tr>
                    <td>$i[category_id]</td>
                    <td>$i[category_name]</td>
                    <td>
                    <a href='index.php?page=category&act=edit&id=$i[category_id]' class='btn'>Edit</a>
                    <a href='index.php?page=category&act=delete&id=$i[category_id]' onclick=\"return confirm('Are you sure?')\" class='btn'>Delete</a>
                    </td></tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
<?php
} elseif ($_GET['act'] == 'delete') {
    if (deleteItem($_GET['id'], "category")) {
        echo "<script>window.alert('Delete Success');
            window.location='index.php?page=category'</script>";
    } else echo "<script>window.alert('Delete Failed');
        window.location='index.php?page=category'</script>";
} elseif ($_GET['act'] == 'add') {
    if (isset($_POST['submit'])) {
        $r = mysqli_query($conn, "INSERT INTO category values (null, '$_POST[category_name]', current_timestamp)");
        if ($r) {
            echo "<script>window.alert('Tambah Kategori Berhasil');
                window.location='index.php?page=category'</script>";
        } else echo "<script>window.alert('Tambah Kategori Gagal');
                window.location='index.php?page=category'</script>";
    }
?>
    <span class="card-title">Tambah Kategori</span>
    <div class="row">
        <form action='' method="POST" class="col s12 no-padding">
            <div class="row no-margin">
                <div class="input-field col s12">
                    <input id="category_name" name="category_name" type="text" required>
                    <label for="category_name" class="">Nama Kategori</label>
                </div>
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light right default" type="submit" name="submit">Submit <i class="material-icons right">send</i></button>
                </div>
            </div>
        </form>
    </div>
<?php } elseif ($_GET['act'] == 'edit') {

    if (isset($_POST['update'])) {
        $r = mysqli_query($conn, "UPDATE category SET category_name = '$_POST[name_category]' WHERE category_id = '$_GET[id]'");
        if ($r) {
            echo "<script>window.alert('Edit Kategori Berhasil');
                window.location='index.php?page=category'</script>";
        } else echo "<script>window.alert('Edit Kategori Gagal');
                window.location='index.php?page=category'</script>";
    }

    $item = mysqli_fetch_array(getItem('category', $_GET['id']));
?>
    <span class="card-title">Edit Kategori</span>
    <div class="row">
        <form action='' method="POST" class="col s12 no-padding">
            <div class="row no-margin">
                <div class="input-field col s12">
                    <input id="name_category" name="name_category" type="text" value="<?= $item['category_name'] ?>" required>
                    <label for="name_category" class="">Nama Kategori</label>
                </div>
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light right default" type="submit" name="update">Update <i class="material-icons right">send</i></button>
                </div>
            </div>
        </form>
    </div>
<?php } ?>