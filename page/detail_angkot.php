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
					<div class="panel-body">
						<h3 class="m-y-0">Detail Angkot</h3>
						<a href="index.php?page=kelola_trayek" class="col-lg-2 col-sm-4 col-xs-6 m-y-5">
							<button type="button" class="btn btn-info m-w-120">Kembali Trayek Angkot</button>
						</a>
					</div>
				</div>
				<center><img src="img/<?= $data['gambar'];?>" height="200px" align="center" alt=""></td></center>	
				<p class="">Warna Angkot   		: <?=$data['warna_angkot'] ?></p>
				<p class="">Ongkos Resmi    : <?=$data['ongkos1'] ?></p>
				<p class="">Titik awal      : <?=$data['titik_awal'] ?></p>
				<p class="">Titik akhir     : <?=$data['titik_akhir'] ?></p>
				<p class="">Jalur Masuk     : <?=$data['jalur_masuk'] ?></p>
				<p class="">Jalur Keluar    : <?=$data['jalur_keluar'] ?></p>
				
			</div>
		</div>
		
	<?php endforeach ?>
	
	
</div>
