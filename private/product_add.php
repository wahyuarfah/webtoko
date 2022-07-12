<?php

function imgProduct()
{

    $namaFile = $_FILES['product_img']['name'];
    $ukuranFile = $_FILES['product_img']['size'];
    $error = $_FILES['product_img']['error'];
    $tmpName = $_FILES['product_img']['tmp_name'];

    // cek apakah gambar di upload
    if ($error === 4) {
        echo "<script>
				alert ('Pilih Gambar terlebih dahulu');
			</script>";
        return 'false';
    }

    //cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert ('Yang Anda Upload Bukan Gambar');
			</script>";
        return false;
    }

    //cek jika ukuran terlalu besar 
    if ($ukuranFile > 30000000) {
        echo "<script>
				alert ('Ukuran Gambar telalu Besar');
			</script>";
        return false;
    }

    //lolos pengecekan
    //generate nama file baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/product/' . $namaFileBaru);
    return $namaFileBaru;
}
if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];
    $product_stock = $_POST['product_stock'];
    $product_img = isset($_FILES['product_img']) ? imgProduct($_FILES['product_img']) : "Tidak Ada gambar";
    $r = mysqli_query($conn, "INSERT INTO product SET

    `product_name` = '$product_name',
    `product_desc` = '$product_desc',
    `product_category` = '$product_category',
    `product_price` = '$product_price',
    `product_stock` = '$product_stock',
    `product_img` = '$product_img'
    
    ");

    if ($r) {
        echo "<script>
				alert ('Berhasil Melakukan penambahan produk');
			</script>";
    } else {
        echo "<script>
				alert ('Gagal Melakukan penambahan produk');
			</script>";
    }
}

?>

<!-- Main content -->
<section class="content">
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputName">Nama Produk</label>
                <input type="text" name="product_name" id="inputName" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputDescription">Deskripsi Produk</label>
                <textarea name="product_desc" id="inputDescription" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="inputStatus">Kategori Produk</label>
                <select name="product_category" id="inputStatus" class="form-control custom-select">
                    <option selected disabled>Select one</option>
                    <?php
                    $categoryData = mysqli_query($conn, "SELECT * FROM `category`");
                    while ($category = mysqli_fetch_array($categoryData)) {
                    ?>

                        <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="inputClientCompany">Harga</label>
                <input type="number" name="product_price" id="inputClientCompany" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputProjectLeader">Stok</label>
                <input type="text" name="product_stock" id="inputProjectLeader" class="form-control">
            </div>
            <div class="form-group">
                <input type="file" name="product_img" id="imgInp" class="btn btn-warning" name="foto" value="Foto ">
                <img id="blah" width="100px" src="#" alt="your image" />
            </div>
            <div class="form-group">
                <a href="index.php?page=product" class="btn btn-secondary">Cancel</a>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Tambah" class="btn btn-success float-right">
            </div>
        </form>
    </div>

</section>