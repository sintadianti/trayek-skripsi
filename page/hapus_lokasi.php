<?php
// require 'koneksi.php';
// require '../function/function.php';
// var_dump($_GET);
$id=$_GET["id"];
$id_trayek=$_GET["id_trayek"];
if(hapusLokasi($id)>0){
	echo "
	<script>
	alert('Data berhasil dihapus');
	document.location.href='index.php?page=tambah_lokasi&id_trayek=".$id_trayek."';
	</script>
	";
}else{
	echo "
	gagal
	";
}


?>