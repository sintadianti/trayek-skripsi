<?php 
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
    <title>Cosmos</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/cosmos.min.css">
    <link rel="stylesheet" href="css/application.min.css">
    <link rel="stylesheet" href="assets/leaflet/leaflet.css">
    <script src="assets/leaflet/leaflet.js"></script>
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
            <li class="menu-title">Main</li>
            <li>
              <a href="page-layouts.html">
                <span class="menu-icon">
                  <i class="zmdi zmdi-home"></i>  
                </span>
                <span class="menu-text">Dashboards</span>
              </a>
            </li>
            <li>
              <a href="index.php?page=peta">
                <span class="menu-icon">
                  <i class="zmdi zmdi-view-web"></i>
                </span>
                <span class="menu-text">Peta Trayek Angkot</span>
              </a>
            </li>  
            <li class="with-sub">
              <a href="index.php?page=trayek">
                <span class="menu-icon">
                  <i class="zmdi zmdi-dot-circle-alt"></i>
                </span>
                <span class="menu-text">Informasi Trayek</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Forms</li>
                <li><a href="forms-form-controls.html">Trayek 1</a></li>
                <li><a href="forms-form-controls.html">Trayek 2</a></li>
                <li><a href="forms-form-controls.html">Trayek 3</a></li>
                <li><a href="forms-form-controls.html">Trayek 4</a></li>
                <li><a href="forms-form-controls.html">Trayek 5</a></li>
                <li><a href="forms-form-controls.html">Trayek 6</a></li>
                <li><a href="forms-form-controls.html">Trayek 7</a></li>
                <li><a href="forms-form-controls.html">Trayek 8</a></li>
                <li><a href="forms-form-controls.html">Trayek 9</a></li>
                <li><a href="forms-form-controls.html">Trayek 10</a></li>
                <li><a href="forms-form-controls.html">Trayek 11</a></li>
                <li><a href="forms-form-controls.html">Trayek 12</a></li>
                <li><a href="forms-form-controls.html">Trayek 13</a></li>
                <li><a href="forms-form-controls.html">Trayek 14</a></li>
                <li><a href="forms-form-controls.html">Trayek 15</a></li>
                <li><a href="forms-form-controls.html">Trayek 16</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="index.php?page=angkutan">
                <span class="menu-icon">
                  <i class="zmdi zmdi-border-all"></i>
                </span>
                <span class="menu-text">Informasi Angkot</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Tables</li>
                <li><a href="tables-basic.html">Basic tables</a></li>
              </ul>
            </li>
            <li>
              <a href="index.php?page=aplikasi">
                <span class="menu-icon">
                  <i class="zmdi zmdi-view-web"></i>
                </span>
                <span class="menu-text">Informasi Aplikasi</span>
              </a>
            </li> 
            <li>
              <a href="index.php?page=keluar">
                <span class="menu-icon">
                  <i class="zmdi zmdi-view-web"></i>
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