<?php

$productCategory = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `product` WHERE `product_category` = '$_GET[id]'"));
if ($productCategory < 1) {

    $r = mysqli_query($conn, "DELETE FROM `category` WHERE `category_id` = '$_GET[id]'");
    echo "<script>window.alert('Category Berhasil di hapus');
                            window.location('index.php?page=category');
                        </script>";
} else {

    echo "<script>window.alert('Category Gagal di hapus, masih ada product tertaut');
                            window.location('index.php?page=category');
                        </script>";
}

echo "<a href='index.php?page=category' class='btn btn-success'> < Kembali ke Category</a>";
