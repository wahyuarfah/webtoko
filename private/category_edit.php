<?php

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `category` where category_id = '$_GET[id]' "));

if (isset($_POST['submit'])) {

    $category_name = $_POST['category_name'];
    $r = mysqli_query($conn, "INSERT INTO category SET

    `category_name` = '$category_name'
    
    ");

    if ($r) {
        echo "<script>
				alert ('Berhasil Melakukan Penambahan Kategory');
			</script>";
    } else {
        echo "<script>
				alert ('Gagal Melakukan Penambahan Kategory');
			</script>";
    }
}

?>

<!-- Main content -->
<section class="content">
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputName">Nama Category</label>
                <input type="text" name="category_name" value="<?= $data['category_name'] ?>" id="inputName" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Tambah" class="btn btn-success float-right">
            </div>
            <div class="form-group">
                <a href="index.php?page=category" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>

</section>