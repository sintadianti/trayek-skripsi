<?php
var_dump($_POST);
if(isset($_POST["tambah"])){
  if(tambahAdmin($_POST)>0){
    echo "
    <script>
    document.location.href='index.php?page=admin';
    </script>
    ";
  }else{
    echo "
    <script>
    alert('gagal');
    document.location.href='index.php?page=admin';
    </script>
    ";
  }
}
?>

<div class="card">
  <div class="panel-heading">
    <strong><h3 class="m-y-0">Tambah Petugas</h3></strong>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <form action="" method="post" data-toggle="validator">
        <div class="form-group">
          <label for="nama" class="control-label">Nama </label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" >
        </div>
        <div class="form-group">
          <label for="username" class="control-label">Username</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="Username" >
        </div>
        <div class="form-group">
          <label for="password" class="control-label">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" >
        </div>
        
        <button type="submit" name="tambah" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
  </div>
</div>
