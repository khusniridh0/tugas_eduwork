<?php require '../php/olahdata.php'; ?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mycss.css">

    <title>login</title>
</head>
<body class="login">
    <div class="content none" id="daftar">
        <div class="container box pd">
            <div class="card text-white bg-primary">
                <div class="card-header text-center">DAFTAR</div>
                <div class="card-body-login ">
                    <form action="" method="POST">
                        <div class="was-validated mb-3">
                            <label for="exampleInputEmail2">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" required="">
                        </div>
                        <div class="was-validated mb-3">
                            <label for="exampleInputPassword2">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword2" required="">
                        </div>
                        <div class="was-validated mb-3">
                            <label for="exampleInputPassword3">Verifikasi Password</label>
                            <input type="password" name="konfirmasiPassword" class="form-control" id="exampleInputPassword3" required="">
                        </div>
                        <div class="d-flex justify-content-around">
                            <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
                            <a class="btn btn-warning lama">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="content" id="login">
            <div class="mt-5 pr-3 d-flex justify-content-end">
                <?php
                    if (isset($_POST['daftar'])) {
                        $email = $_POST['email'];
                        $query = query("SELECT email FROM angota WHERE email = '$email';");
                        if ( isset($query['email']) != $email) {
                            if ( !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['konfirmasiPassword']) ) {
                                if ($_POST['password'] == $_POST['konfirmasiPassword'] && daftar($_POST) > 0) {
                                    echo "<div class='alert alert-danger position-absolute' role='alert'>Pendaftaran berhasil! harap login</div>";
                                }else{
                                    echo "<div class='alert alert-danger position-absolute' role='alert'>Verifikasi Password tidak sama, harap coba lagi</div>";
                                }
                            }
                        }else{
                            echo "<div class='alert alert-danger position-absolute' role='alert'>Email yang anda telah terdaftar!  silakan login</div>";
                        }
                    };

                    if ( isset($_POST['login'])) {
                        print_r(login($_POST));
                    }
                ?>
            </div>
        <div class="container box pd">
            <div class="card text-white bg-primary">
                <div class="card-header text-center">LOGIN</div>
                <div class="card-body-login ">
                    <form action="" method="POST">
                        <div class="was-validated mb-3">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
                        </div>
                        <div class="was-validated mb-3">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required="">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                        </div>
                        <div class="d-flex justify-content-around">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                            <a class="btn btn-warning baru">Daftar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/js/jquery.js" ></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/script.js"></script>
  </body>
</html>