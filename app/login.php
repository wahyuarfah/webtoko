    <?php
    if (isset($_POST['login'])) {
        // var_dump($_POST);
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $r = mysqli_query($conn, "SELECT * FROM users WHERE users_email = '$user'");
        //cek username
        if (mysqli_num_rows($r) === 1) {
            //cek password
            $row = mysqli_fetch_assoc($r);
            if (password_verify($pass, $row["users_password"])) {
                $_SESSION["loginAdmin"] = true;
                $_SESSION["id"] = $row["users_id"];
            }
            header('location:index.php');
        } else {
            echo "<script>window.alert('Maaf, Anda Tidak Memiliki akses ');
                        window.location('index.php');
                    </script>";
        }
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="theme/favicon.png" type="image/png" rel="icon">
        <meta name="theme-color" content="#1a54de">
        <meta name="msapplication-navbutton-color" content="#1a54de">
        <meta name="apple-mobile-web-app-status-bar-style" content="#1a54de">
        <title>Login - Admin Batik Banesa</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="home/css/materialize.css" type="text/css" rel="stylesheet" />
        <link href="home/css/app-style.css" type="text/css" rel="stylesheet" />
        <link href="theme/app-theme.css" type="text/css" rel="stylesheet" />

    </head>

    <body>
        <div id="pre-page-loader">
            <div id="pre-page-loader-center">
                <div id="pre-page-loader-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                    <div class="object" id="object_big"></div>
                </div>
            </div>
        </div>
        <main>
            <div id="brand-banner">
                <div class="section">
                    <div class="row">
                        <div class="col s12">
                            <a href="index.php" class="brand">Batik Banesa</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="form-banner">
                <div class="section">
                    <div class="row">
                        <div class="col s12">
                            <div class="card form-box">
                                <div class="card-content">
                                    <span class="card-title login-title">Welcome back&#33;</span>
                                    <div class="row">
                                        <form method="post">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">mail</i>
                                                <input id="user" name="user" type="text" require autofocus>
                                                <label for="user">Email</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">lock</i>
                                                <input id="password" name="pass" type="password">
                                                <label for="password">Password</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <button class="col s12 btn waves-effect waves-light default" type="submit" name="login">Sign in to your account</button>
                                            </div>
                                            <a class="" href="../public/index.php">Login As Anonymous</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <footer class="form-footer">

            <div class="row">
                <div class="col s12 center">
                    <ul class="footer-list">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">&copy; English Challenge</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <script src="home/js/jquery.min.js"></script>
        <script src="home/js/materialize.js"></script>
        <script src="home/js/jquery.gradientify.min.js"></script>
        <script src="home/js/init.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("body").gradientify({
                    gradients: [{
                        start: [237, 238, 240],
                        stop: [246, 246, 246]
                    }, {
                        start: [246, 246, 246],
                        stop: [228, 228, 228]
                    }, {
                        start: [228, 228, 228],
                        stop: [246, 246, 246]
                    }]
                });
            });
        </script>
    </body>

    </html>