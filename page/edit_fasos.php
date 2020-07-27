<?php
$id=$_GET["id"];
$fasos =query("SELECT * FROM fasos WHERE id=$id")[0];

//cek tombol tambah data telah diklik
if(isset($_POST["edit"])){
    //mengecek apakah data telah diubah atau tidak
  if(editFasos($_POST)>0){
    echo "
    <script>
    alert('Data berhasil diubah');
    document.location.href='index.php?page=kelola_fasos';
    </script>
    ";
  }else{
    echo "
    <script>
    alert('Data gagal diubah');
    document.location.href='index.php?page=kelola_fasos';
    </script> 
    ";
  }
}
?>
<div class="card">
  <div class="panel-heading">
    <strong><h3 class="m-y-0">Edit Fasilitas Sosial</h3></strong>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <form action="" method="post" data-toggle="validator">
        <input type="hidden" name="id" value="<?php echo $fasos['id']; ?>">

        <div class="form-group">
          <label for="nama_tempat" class="control-label">Nama Tempat</label>
          <input type="text" class="form-control" name="nama_tempat" id="nama_tempat" required value="<?= $fasos["nama_tempat"]?>" placeholder="Nama Tempat" >
        </div>
        <div class="form-group">
          <label for="deskripsi" class="control-label">Deskripsi</label>
          <input type="text" class="form-control" name="deskripsi" id="deskripsi" required value="<?= $fasos["deskripsi"]?>" placeholder="Deskripsi" >
        </div>
        <div class="form-group">
          <label for="longtitude" class="control-label">Longtitude</label>
          <input type="text" class="form-control" name="longtitude" id="longtitude" required value="<?= $fasos["longtitude"]?>"placeholder="Longtitude" >
        </div>
        <div class="form-group">
          <label for="latitude" class="control-label">Latitude</label>
          <input type="text" class="form-control" name="latitude" id="latitude" required value="<?= $fasos["latitude"]?>" placeholder="Latitude" >
        </div>
        
        <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
  </div>
</div>