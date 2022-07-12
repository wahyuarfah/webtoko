<?php

if (isset($_POST['submit'])) {
    $users_name = $_POST['users_name'];
    $users_email = $_POST['users_email'];
    $users_password = $_POST['users_password'];
    $r = mysqli_query($conn, "INSERT INTO `users` SET

    `users_name` = '$users_name',
    `users_email` = '$users_email',
    `users_password` = '$users_password' 
    ");

    if ($r) {
        echo "<script>
				alert ('Berhasil Melakukan penambahan user');
			</script>";
    } else {
        echo "<script>
				alert ('Gagal Melakukan penambahan user');
			</script>";
    }
}

?>

<!-- Main content -->
<section class="content">
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputName">Nama</label>
                <input type="text" required name="users_name" id="inputName" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputDescription">Email</label>
                <input type="text" required name="users_email" id="inputEmail" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputClientCompany">Password</label>
                <input type="text" required name="users_password" id="inputPassword" class="form-control">
            </div>
            <div class="form-group">
                <a href="index.php?page=users" class="btn btn-secondary">Cancel</a>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Tambah" class="btn btn-success float-right">
            </div>
        </form>
    </div>

</section>