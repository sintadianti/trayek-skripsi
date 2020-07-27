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

