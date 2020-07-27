<?php 
require 'function/function.php';

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
</head>
<body>
  
  <div class="container">

    <div class="panel panel-default">
      <div class="panel-body">
       <?php 

       $data = $_GET['id_trayek'];
       $angkot=query("SELECT * FROM angkot WHERE id_trayek=$data");
       
       ?>


       <div class="col-lg-12">

        <?php foreach ($angkot as $data): ?>
          <div class="col-lg-4">  
          </div>
          <div class="row">
            <div class="col-md-16">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="m-y-0">Detail Angkot</h3>
                  
                  

                </div>
                <a href="user.php?id_trayek=all" class="col-lg-2 col-sm-4 col-xs-6 m-y-5">
                  Kembali Trayek Angkot
                </a>
              </div>
            </div>
            <center><img src="img/<?= $data['gambar'];?>" height="100px" align="center" alt=""></td></center> 
            <p class="">Warna Angkot      : <?=$data['warna_angkot'] ?></p>
            <p class="">Ongkos Resmi    : <?=$data['ongkos1'] ?></p>
            <p class="">Titik awal      : <?=$data['titik_awal'] ?></p>
            <p class="">Titik akhir     : <?=$data['titik_akhir'] ?></p>
            <p class="">Jalur Masuk     : <?=$data['jalur_masuk'] ?></p>
            <p class="">Jalur Keluar    : <?=$data['jalur_keluar'] ?></p>
            
          </div>
        </div>
        
      <?php endforeach ?>
      
      
    </div>
    


  </div>
</div>  
</div>


<script src="js/vendor.min.js"></script>
<script src="js/cosmos.min.js"></script>
<script src="js/application.min.js"></script>
</body>
</html>