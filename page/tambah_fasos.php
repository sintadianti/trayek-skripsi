<?php
var_dump($_POST);
if(isset($_POST["tambah"])){
  var_dump($_POST);
  if(tambahFasos($_POST)>0){
    echo "
    <script>
    document.location.href='index.php?page=kelola_fasos';
    </script>
    ";
  }else{
    echo "
    <script>
    alert('gagal');
    document.location.href='index.php?page=kelola_fasos';
    </script>
    ";
  }
}
?>
<div class="card">
  <div class="panel-heading">
    <strong><h3 class="m-y-0">Fasilitas Sosial</h3></strong>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <form action="" method="post" data-toggle="validator">
        <div class="form-group">
          <label for="nama_tempat" class="control-label">Nama Tempat</label>
          <input type="text" class="form-control" name="nama_tempat" id="nama_tempat" placeholder="Nama Tempat" >
        </div>
        <div class="form-group">
          <label for="deskripsi" class="control-label">Deskripsi</label>
          <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi" >
        </div>
        <div class="form-group">
          <label for="longtitude" class="control-label">Longtitude</label>
          <input type="text" class="form-control" name="longtitude" id="longtitude" placeholder="Longtitude" >
        </div>
        <div class="form-group">
          <label for="latitude" class="control-label">Latitude</label>
          <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude" >
        </div>
        
        <button type="submit" name="tambah" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
  </div>
</div>