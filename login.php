<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Halaman Log In Web Kedai Kopi</title>
    <!-- Favicon-->
    <link rel="icon" type="masthead-avatar mb-5" href="assets/img/logokopi.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/style.css" rel="stylesheet" />
</head>
<style>
    body {
        font-family: 'Helvetica', sans-serif;
        text-align: center;
        background-image: url("assets/img/BG_Login.jpg");
        background-size: cover;
        background-position: center;
        filter: brightness(100%) saturate(120%);
    }

    .login-container {
        display: flex;
        justify-content: left;
        align-items: center;
        height: 100vh;
        margin-left: 150px;
    }

    .login-box {
        position: relative;
        border-radius: 20px;
        background-color: rgba(255, 255, 255, 0.2);
        padding: 20px;
        box-shadow: 0 0 100px rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(5px);
        width: 220px;
        margin: 50 auto;
    }

    .login-box img {
        width: 200px;
        height: 200px;
        border-radius: 10px;
    }

    .form-control {
        border: 0px solid #e67e22;
        border-radius: 10px;
        padding: 12px;
        margin-bottom: 5px;
    }

    .btn-login {
        background-color: #fff;
        color: #000;
        border: 0px solid #fff;
        border-radius: 10px;
        padding: 10px 20px;
        margin-top: 5px;
        width: auto;
        box-sizing: border-box;
        position: relative;
        overflow: hidden;
    }

    .btn-login::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, #ff8c00, #ffaf5f, #ffbf80);
        transition: left 0.3s ease-in-out;
    }

    .btn-login:hover::before {
        left: 100%;
    }

    .col-lg-5 {
        margin: 0 auto;
        padding: 40px;
        background-color: #fffff;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
    }

</style>
<body>
    <div class="login-container">
        <div class="login-box">
            <img src="assets/img/logokopi.png" alt="">
            <h1 class="login-title">LOGIN AKSES</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="name" class="form-control" placeholder="Masukkan Username" name="txtUsername" required autofocus>
                <input type="password" class="form-control" placeholder="Masukkan Password" name="txtPassword" required>
                <button type="submit" class=" btn-login" name="btnLogin">Log In</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
    $konek = mysqli_connect("sql307.infinityfree.com","if0_34530563","SVERhwExtvD","if0_34530563_db_kopi");

    if (isset($_POST['btnLogin'])) {
        $sql_login = "SELECT * FROM tb_pengguna WHERE email='".$_POST['txtUsername']."' AND password='".$_POST['txtPassword']."'";
        $query_login = mysqli_query($konek, $sql_login);
        $data_login = mysqli_fetch_array($query_login,MYSQLI_BOTH);
        $jumlah_login = mysqli_num_rows($query_login);

        if ($jumlah_login >=1 ){
            session_start();
            $_SESSION["ses_username"]=$data_login["email"];
            $_SESSION["ses_status"]=$data_login["status"];

            echo "<script>alert('Login Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        }else{
            echo "<script>alert('Login Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=login.php'>";
        }
    }
?>
