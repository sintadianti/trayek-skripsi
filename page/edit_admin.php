<?php
$id=$_GET["id"];
//query masasiswa berdasarkan id
$admin=query("SELECT * FROM user WHERE id=$id")[0];

//cek tombol tambah data telah diklik
if(isset($_POST["edit"])){
    //mengecek apakah data telah diubah atau tidak
    if(editAdmin($_POST)>0){
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href='index.php?page=admin';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data gagal diubah');
                document.location.href='index.php?page=admin';
            </script>
    ";
    }
}
?>
<div class="card">
  <div class="panel-heading">
    <strong><h3 class="m-y-0">Edit Petugas</h3></strong>
  </div>
  <hr>
  <div class="row">
      <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
          <form action="" method="post" data-toggle="validator">
             <input type="hidden" name="id" value="<?php echo $admin['id']; ?>">

            <div class="form-group">
              <label for="nama" class="control-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" required value="<?= $admin["nama"]?>" placeholder="Nama Tempat" >
            </div>
            <div class="form-group">
              <label for="username" class="control-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" required value="<?= $admin["username"]?>" placeholder="Username" >
            </div>
            <div class="form-group">
              <label for="password" class="control-label">Password Lama</label>
                <input type="text" class="form-control" name="password" id="password" placeholder="Password" >
            </div>
            <div class="form-group">
              <label for="password" class="control-label">Password Baru</label>
                <input type="password" class="form-control" name="passwordBaru" id="password" placeholder="Password" >
            </div>
                  <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
            </form>
      </div>
  </div>
</div>