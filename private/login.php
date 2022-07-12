    <?php
    if (isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $r = mysqli_query($conn, "SELECT * FROM users WHERE users_email = '$user'");
        //cek username
        if (mysqli_num_rows($r) === 1) {
            //cek password
            $row = mysqli_fetch_assoc($r);
            if (password_verify($pass, $row["users_password"]) || $row["users_password"] == $pass) {
                $_SESSION["loginAdmin"] = true;
                $_SESSION["id"] = $row["users_id"];
            }
            header('location:index.php');
        } else {
            echo "Jumlah data user di database : $mysqli_num_rows($r)";
        }
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Web Toko | Log in</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Selamat Datang</b></a>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Silakan masuk ke dalam </p>
                    <form action="" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" name="user" autofocus class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="dist/js/adminlte.min.js"></script>
    </body>

    </html>