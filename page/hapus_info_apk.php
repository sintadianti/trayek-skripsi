<?php
// require 'koneksi.php';
$id=$_GET["id"];
var_dump($_GET);
if(hapusInfo($id)>0){
    echo "
    <script>
    alert('Data berhasil dihapus');
    document.location.href='index.php?page=info_apk';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data gagal dihapus');
    document.location.href='index.php?page=info_apk';
    </script>
    ";
}


?>