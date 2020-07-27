<?php
$id=$_GET["id"];

//query masasiswa berdasarkan id
$informasi=query("SELECT * FROM informasi WHERE id=$id")[0];

//cek tombol tambah data telah diklik
if(isset($_POST["edit"])){
    //mengecek apakah data telah diubah atau tidak
  if(editInfo($_POST)>0){
    echo "
    <script>
    alert('Data berhasil diubah');
    document.location.href='index.php?page=info_apk';
    </script>
    ";
  }else{
    echo "
    <script>
    alert('Data gagal diubah');
    document.location.href='index.php?page=info_apk';
    </script>
    ";
  }
}
?>
<div class="card">
  <div class="panel-heading">
    <strong><h3 class="m-y-0">Edit Informasi Aplikasi</h3></strong>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <form action="" method="post" data-toggle="validator">
       <input type="hidden" name="id" value="<?php echo $informasi['id']; ?>">

       <div class="form-group">
        <label for="deskripsi" class="control-label">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi" id="deskripsi" equired value="<?= $informasi["deskripsi"]?>" placeholder="Deskripsi" >
      </div>
      
      <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
    </form>
  </div>
</div>
</div>