<?php
mysqli_query($conn, "truncate visitor");
mysqli_query($conn, "update product set product_seen = 0");
mysqli_query($conn, "update media set media_seen = 0");

echo "<script>window.alert('Reset Success');
    window.location='index.php'</script>";
