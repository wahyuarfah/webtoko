<?php

$result = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_id` = '$_GET[id]'");
$r = mysqli_query($conn, "DELETE FROM `product` WHERE `product_id` = '$_GET[id]'");
$foto = mysqli_fetch_array($result)["product_img"];
if ($r) {

    unlink("img/product/$foto");
    echo "<script>window.alert('Product Berhasil di hapus');
                            window.location('index.php');
                        </script>";
    echo "<a href='index.php?page=product' class='btn btn-success'> < Kembali ke Product</a>";
} else {

    echo "<script>window.alert('Product Gagal di hapus');
                            window.location('index.php?page=product');
                        </script>";
}
