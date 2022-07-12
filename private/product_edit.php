<?php

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `product` WHERE `product_id` = '$_GET[id]'"));

function imgProduct()
{

    $namaFile = $_FILES['product_img']['name'];
    $ukuranFile = $_FILES['product_img']['size'];
    $error = $_FILES['product_img']['error'];
    $tmpName = $_FILES['product_img']['tmp_name'];

    // cek apakah gambar di upload
    if ($error === 4) {
        echo "<script>
				alert ('Gambar tidak diperbaharui');
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
    $product_img = isset($_FILES['product_img']) ? imgProduct($_FILES['product_img']) : false;
    if ($_FILES['product_img']['name'] != '') {

        $r = mysqli_query($conn, "UPDATE product SET
        `product_name` = '$product_name',
        `product_desc` = '$product_desc',
        `product_category` = '$product_category',
        `product_price` = '$product_price',
        `product_stock` = '$product_stock',
        `product_img` = '$product_img'
     WHERE `product_id` = '$_GET[id]' ");
        unlink("img/product/$data[product_img]");
    } else {
        $r = mysqli_query($conn, "UPDATE product SET
        `product_name` = '$product_name',
        `product_desc` = '$product_desc',
        `product_category` = '$product_category',
        `product_price` = '$product_price',
        `product_stock` = '$product_stock'
    ");
    }

    if ($r) {

        echo "<script>
				alert ('Berhasil Melakukan update produk');
			</script>";
    } else {
        echo "<script>
				alert ('Gagal Melakukan update produk');
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
                <input type="text" name="product_name" value="<?= $data['product_name'] ?>" id="inputName" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputDescription">Deskripsi Produk</label>
                <textarea name="product_desc" id="inputDescription" class="form-control" rows="4"><?= $data['product_desc'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="inputStatus">Kategori Produk</label>
                <select name="product_category" id="inputStatus" class="form-control custom-select">
                    <option selected disabled>Select one</option>
                    <option value="1" <?= ($data['product_category'] == 1) ? "selected" : "" ?>>KAOS POLOS 24s</option>
                    <option value="2" <?= ($data['product_category'] == 2) ? "selected" : "" ?>>KAOS POLOS 30s</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputClientCompany">Harga</label>
                <input type="number" name="product_price" value="<?= $data['product_price'] ?>" id="inputClientCompany" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputProjectLeader">Stok</label>
                <input type="text" name="product_stock" value="<?= $data['product_stock'] ?>" id="inputProjectLeader" class="form-control">
            </div>
            <div class="form-group">
                <input type="file" name="product_img" id="imgInp" class="btn btn-warning">
                <img id="blah" width="100px" src="img/product/<?= $data['product_img'] ?>" alt="your image" />
            </div>
            <div class="form-group">
                <a href="index.php?page=product" class="btn btn-secondary">Cancel</a>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Update" class="btn btn-success float-right">
            </div>
        </form>
    </div>

</section>