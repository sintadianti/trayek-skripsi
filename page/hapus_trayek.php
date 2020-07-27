<?php
// require 'koneksi.php';
$id_trayek=$_GET["id_trayek"];
var_dump($_GET);
if(hapusTrayek($id_trayek)>0){
	echo "
	<script>
	alert('Data berhasil dihapus');
	document.location.href='index.php?page=kelola_trayek';
	</script>
	";
}else{
	echo "

	";
}


?>