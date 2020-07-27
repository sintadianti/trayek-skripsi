<?php
var_dump($_POST);
// require 'koneksi.php';
$id=$_GET["id"];
var_dump($_GET);
if(hapusUser($id)>0){
	echo "
	<script>
	alert('Data berhasil dihapus');
	document.location.href='index.php?page=admin';
	</script>
	";
}else{
	echo "

	";
}
?>