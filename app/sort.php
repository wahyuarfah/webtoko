<?php
include 'config.php';
include "functions.php";
$output = '';
$order = $_POST["order"];
if ($order == 'desc') {
    $order = 'asc';
} else {
    $order = 'desc';
}

$nama_kolom = $_POST["nama_kolom"];
$orderby = $_POST["order"];

$query = "SELECT * FROM product ORDER BY " . $nama_kolom . " " . $orderby . "";
$dewan1 = $db1->prepare($query);
$dewan1->execute();
$res1 = $dewan1->get_result();

$output .= '
  <table class="table table-bordered">
      <tr>
           <tr>
                <th><a class="column_sort" id="product_id" data-order="' . $order . '" href="#">ID</a></th>
                <th><a class="column_sort" id="product_name" data-order="' . $order . '" href="#">Nama</a></th>
                <th> <a class="column_sort" id="product_desc" data-order="' . $order . '" href="#">Deskripsi</a></th>
                <th> <a class="column_sort" id="product_category" data-order="' . $order . '" href="#">Kategori</a></th>
                <th> <a class="column_sort" id="product_img" data-order="' . $order . '" href="#">Gambar</a></th>
                <th> <a class="column_sort" id="product_stock" data-order="' . $order . '" href="#">Stok</a></th>
                <th> <a class="column_sort" id="product_price" data-order="' . $order . '" href="#">Harga</a></th>
                <th> <a class="column_sort" id="product_seen" data-order="' . $order . '" href="#">Dilihat</a></th>
                <th>Action</th>
            </tr>
      </tr>
  ';
$no = 1;
while ($row = $res1->fetch_assoc()) {
    $output .= '
      <tr>
           <td>' . $no++ . '</td>
           <td>' . $row["product_name"] . '</td>
           <td>' . $row["product_desc"] . '</td>
           <td>' . productCategory($row["product_category"]) . '</td>
           <td><img src="img/product/' . $row['product_img'] . '" style="height:100px;" alt="' . $row["product_img"] . '"></td>
           <td>' . $row["product_stock"] . '</td>
           <td>' . $row["product_price"] . '</td>
           <td>' . $row["product_seen"] . '</td>
           <td>
           <a href="index.php?page=product&act=edit&id=' . $row["product_id"] . '"class="btn btn-primary">Edit</a>
           <a href="index.php?page=product&act=delete&id=' . $row["product_id"] . '" onclick="return confirm(Are you sure?)" class="btn bg-danger">Delete</a>
           </td>
      </tr>
      ';
}
$output .= '</table>';
echo $output;
