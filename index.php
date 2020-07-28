<?php 
session_start();

if( !isset($_SESSION["login"])){
  header("Location: user.php?id_trayek=all");
  exit;
}

require 'function/function.php';
$page=isset($_GET["page"])?$_GET["page"]:'dashboard';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from big-bang-studio.com/cosmos/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:55:36 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="">
  <title>Angkot Garut</title>
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
  <link rel="stylesheet" href="css/vendor.min.css">
  <link rel="stylesheet" href="css/cosmos.min.css">
  <link rel="stylesheet" href="css/application.min.css">
  <link rel="stylesheet" href="assets/leaflet/leaflet.css">
  <script src="assets/leaflet/leaflet.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

</head>
<body class="layout layout-header-fixed layout-left-sidebar-fixed">
  <div class="site-overlay"></div>
  <div class="site-header">
    <nav class="navbar navbar-default">
      <div class="navbar-header">
        <a class="navbar-brand" href="index-2.html">
          <img src="img/angkot.png" alt="" height="40">
          <span>Angkot Garut</span>
        </a>
        <button class="navbar-toggler left-sidebar-toggle pull-left visible-xs" type="button">
          <span class="hamburger"></span>
        </button>
        <button class="navbar-toggler right-sidebar-toggle pull-right visible-xs-block" type="button">
          <i class="zmdi zmdi-long-arrow-left"></i>
          <div class="dot bg-danger"></div>
        </button>
        <button class="navbar-toggler pull-right visible-xs-block" type="button" data-toggle="collapse" data-target="#navbar">
          <span class="more"></span>
        </button>
      </div>
      <div class="navbar-collapsible">
        <div id="navbar" class="navbar-collapse collapse">
          <button class="navbar-toggler left-sidebar-collapse pull-left hidden-xs" type="button">
            <span class="hamburger"></span>
          </button> 
            <!-- <div class="alert alert-light" role="alert">
              <center>PETA TRAYEK ANGKUTAN KOTA KABUPATEN GARUT</center>
            </div> -->
          </div>
        </div>
      </nav>
    </div>
    <div class="site-main">
      <div class="site-left-sidebar">
        <div class="sidebar-backdrop"></div>
        <div class="custom-scrollbar">
          <ul class="sidebar-menu">
            <li class="menu-title">Admin</li>
            <li>
              <a href="index.php?page=halaman_utama">
                <span class="menu-icon">
                  <i class="zmdi zmdi-home"></i>  
                </span>
                <span class="menu-text">Beranda</span>
              </a>
            </li>
            <li class="">
              <a href="index.php?page=peta&id_trayek=all">
                <span class="menu-icon">
                  <i class="zmdi zmdi-pin"></i>
                </span>
                <span class="menu-text">Peta Trayek Angkot</span>
              </a>
            </li>  
            <li class="">
              <a href="index.php?page=kelola_trayek">
                <span class="menu-icon">
                  <i class="zmdi zmdi-directions-car"></i>
                </span>
                <span class="menu-text">Informasi Angkot</span>
              </a>
            </li>
            <li>
              <a href="index.php?page=kelola_fasos">
                <span class="menu-icon">
                  <i class="zmdi zmdi-store"></i>
                </span>
                <span class="menu-text">Informasi Fasilitas Sosial</span>
              </a>
            </li> 
            <li>
              <a href="index.php?page=info_apk">
                <span class="menu-icon">
                  <i class="zmdi zmdi-info"></i>
                </span>
                <span class="menu-text">Informasi Aplikasi</span>
              </a>
            </li>
            <li>
              <a href="index.php?page=admin">
                <span class="menu-icon">
                  <i class="zmdi zmdi-accounts"></i>
                </span>
                <span class="menu-text">Kelola Admin</span>
              </a>
            </li> 
            <li>
              <a href="logout.php">
                <span class="menu-icon">
                  <i class="zmdi zmdi-arrow-left"></i>
                </span>
                <span class="menu-text">Keluar</span>
              </a>
            </li> 
          </ul>
        </div>
      </div>
      <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-body">
            <?php 
            $file="page/$page.php";

            if(file_exists("$file")){
              include_once($file);
            }else{
              echo "<h3>Halaman Belum dibuat</h3>";
            }
            ?>
          </div>
        </div>
        
      </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
  </body>

  <!-- Mirrored from big-bang-studio.com/cosmos/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:55:36 GMT -->
  </html>