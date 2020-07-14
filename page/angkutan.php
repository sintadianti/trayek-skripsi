<?php 
$angkot=query("SELECT * FROM angkot");
?>
<center><h3 class="title-5 m-b-35">Informasi Angkutan Kota (Angkot)</h3>
  <p class="help-block">
    <small>Informasi mengenai angkutan kota (angkot) yang beroperasi di Kabupaten Garut </small>
  </p>
</center>
<hr>
<?php 
foreach ($angkot as $row):
 ?>
<div class="col-md-4 col-sm-6">
  <div class="catalog-products">
    <div class="c-product">
      <a class="cp-img" style="background-image: url(img/<?=$row['gambar']?>)" href="#">
      </a>
      <!-- <img src="img/" alt=""> -->
      <div class="cp-content">
                      
        <div class="cp-title"><?=$row['trayek']?></div>
          <a href="index.php?page=detail_angkot&id_trayek=<?= $row["id_trayek"];?>" type="button" class="btn btn-success m-w-120">Detail Angkot</a>
        </div>
    </div>
  </div>
</div>    
<?php 
endforeach;
 ?>          


<!--<div class="row">
    <div class="site-content">
        <div class="panel panel-default m-b-0">
          <div class="panel-body">
            <div class="product">
              <div class="row">
                <div class="col-sm-7">
                  <div class="p-title">
                    <h3 class="m-y-0">Trayek Angkutan Kota 01</h3>
                  </div>
                  <div class="p-text">
                    <p class="">Rute            : Sukaregang-Terminal Guntur</p>
                    <p class="">Warna Angkot    : Hijau</p>
                    <p class="">Ongkos Resmi    : Rp. 5000,-</p>
                    <p class="">Ongkos Biasanya : Rp. 4000,-</p>
                    <p class="">Gambar          :</p>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="p-images m-b-30 m-sm-b-0">
                    <div class="m-b-20">
                      <a href="#">
                        <img src="img/photos/1.jpg">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>-->
        