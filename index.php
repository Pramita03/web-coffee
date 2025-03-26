<!DOCTYPE html>
<title>Coffee Shop Inventory</title>
<!-- Favicon-->
<link rel="icon" type="masthead-avatar mb-5" href="assets/img/logokopi.png" />
<?php
    session_start();
    if (isset($_SESSION['ses_username'])=="") {
        echo"<meta http-equiv='refresh' content='0; url=login.php'>";
    }else{
        $data_username = $_SESSION["ses_username"];
        $data_status = $_SESSION["ses_status"];
    }

    $konek = mysqli_connect('localhost','root','','db_kedai');
?>
<html lang="en">
    <head>
            <style>
                body {
            font-family: 'Helvetica', sans-serif;
            text-align: center;
            background-image: url("assets/img/BG_Web.jpg");
            background-size: cover;
            background-position: center;
            filter: brightness(70%) saturate(120%);
            backdrop-filter: blur(12px);
            }
            .container {
        color: #fff;
    }
            </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
        <!-- Fonts CSS-->
        <link rel="stylesheet" href="css/heading.css">
        <link rel="stylesheet" href="css/body.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">COFFE SHOP</a>
                <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">HOME</a>
                        </li>
                        <?php
                        if ($data_status=="admin"){
                        ?>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="?halaman=kopi_tampil">TAMBAH DATA STOK</a>
                        </li>
                        <?php
                            }
                        ?>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="?halaman=tampilan_kopi">DATA STOK KOPI</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="javascript:void(0)" onclick="window.open('kopi_laporan.php', '_blank')">LAPORAN STOK KOPI</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')">LOG OUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/logokopi.png" alt="" style="width: 200px; height: 200px; border-radius: 50%;">

                <!-- Masthead Heading-->
                <h1 class="masthead-heading mb-0">Coffee Shop Inventory</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
        <!-- Page content-->
        <div class="container-fluid">
                    <!-- Toogle menu -->

                    <!-- /Toogle Menu -->
                    <!-- Menjadikan halaman web dinamis, denngan menjadikan halaman lain yang dipanggil sebagai sebuah konten dari index.php-->
                    <?php
                    if(isset($_GET['halaman'])){
                        $hal = $_GET['halaman'];
                        switch ($hal) {
                            case 'kopi_ubah';
                                include "kopi_ubah.php";
                                break;
                            case 'kopi_aksi';
                                include "kopi_aksi.php";
                                break;
                            case 'kopi_tambah';
                                include "kopi_tambah.php";
                                break;
                            case 'kopi_tampil';
                                include "kopi_tampil.php";
                                break;
                            case 'kopi_laporan';
                                include "kopi_laporan.php";
                                break;
                            case 'tampilan_kopi';
                                include "tampilan_kopi.php";
                                break;
                            case 'home';
                            // jika memanggil halaman=home maka...
                                include "home.php";
                            //menampilkan file home.php
                                break;
                        default: // jika memanggil halaman tidak ada maka...
                            echo "<<center><h3> ERROR !<?h3></center>";
                            //menampilkan pesan error
                            break;
                        }
                    }else{ //jika tidak memanggil halaman apapun maka...
                        include "home.php"; //menampilkan file home.php
                    }
                    ?>
                </div>
            </div>
        </div>
        
<!-- Copyright Section-->
<section class="copyright py-4 text-center text-white">
            <div class="container"><small class="pre-wrap">Coffee Shop Inventory</small></div>
        </section>

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</div>
        <script type="text/javascript" href="js/bootstrap.min.js"></script>
</html>
