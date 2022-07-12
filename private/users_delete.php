<?php

$r = mysqli_query($conn, "DELETE FROM `users` WHERE `users_id` = '$_GET[id]'");
if ($r) {

    echo "<script>window.alert('Users Berhasil di hapus');
                            window.location('index.php');
                        </script>";
    echo "<a href='index.php?page=users' class='btn btn-success'> < Kembali ke User</a>";
} else {

    echo "<script>window.alert('User Gagal di hapus');
                            window.location('index.php?page=users');
                        </script>";
}
