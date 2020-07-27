<?php
$id_trayek=$_GET["id_trayek"];
$angkot =query("SELECT * FROM angkot WHERE id_trayek=$id_trayek")[0];

//cek tombol tambah data telah diklik
if(isset($_POST["edit"])){
    //mengecek apakah data telah diubah atau tidak
  if(editTrayek($_POST)>0){
    echo "
    <script>
    alert('Data berhasil diubah');
    document.location.href='index.php?page=kelola_trayek';
    </script>
    ";
  }else{
    echo "
    <script>
    alert('Data gagal diubah');
                // document.location.href='index.php?page=kelola_trayek';
    </script> 
    ";
  }
}
?>
<div class="card">
  <div class="panel-heading">
    <strong><h3 class="m-y-0">Mengubah Data Trayek Angkot</h3></strong>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <form action="" method="post" data-toggle="validator" enctype="multipart/form-data">
        <input type="hidden" name="id_trayek" value="<?php echo $angkot['id_trayek']; ?>">

        <div class="form-group">
          <label for="trayek" class="control-label">No Trayek</label>
          <input type="text" class="form-control" name="trayek" id="trayek" required value="<?= $angkot["trayek"]?>" placeholder="No Trayek" data-error="Isi no trayek." required>
          <div class="help-block with-errors"></div>
        </div>
        
        <div class="form-group">
          <label for="jalur_angkot" class="control-label">Jurusan Angkot</label>
          <input type="text" class="form-control" name="jalur_angkot" id="jalur_angkot" required value="<?= $angkot["jalur_angkot"]?>" placeholder="Jurusan Angkot" data-error="Isi jurusan angkot" required >
          <div class="help-block with-errors"></div>
        </div>

        <div class="form-group">
          <label for="warna_angkot" class="control-label">Warna Angkot</label>
          <input type="text" class="form-control" name="warna_angkot" id="warna_angkot" required value="<?= $angkot["warna_angkot"]?>" placeholder="Warna Angkot" data-error="Isi warna angkot" required >
          <div class="help-block with-errors"></div>
        </div>
        
        <div class="form-group">
          <label for="ongkos1" class="control-label">Ongkos Resmi</label>
          <input type="text" class="form-control" name="ongkos1" id="ongkos1" required value="<?= $angkot["ongkos1"]?>" placeholder="Ongkos Resmi" data-error="Isi Ongkos" required >
          <div class="help-block with-errors"></div>
        </div>
            <!--<div class="form-group">
              <label for="ongkos2" class="control-label">Biasanya Ongkos</label>
                <input type="text" class="form-control" name="ongkos2" id="ongkos2" placeholder="Biasanya Ongkos" >
              </div>-->
              <div class="form-group">
                <label for="titik_awal" class="control-label">Lokasi Awal</label>
                <input type="text" class="form-control" name="titik_awal" id="titik_awal" required value="<?= $angkot["titik_awal"]?>" placeholder="Lokasi Awal" data-error="Isi lokasi awal." required>
                <div class="help-block with-errors"></div>
              </div>
              
              <div class="form-group">
                <label for="titik_akhir" class="control-label">Lokasi Akhir</label>
                <input type="text" class="form-control" name="titik_akhir" id="titik_akhir" required value="<?= $angkot["titik_akhir"]?>" placeholder="Lokasi Akhir" data-error="Isi lokasi akhir" required>
                <div class="help-block with-errors"></div>
              </div>
              
              <div class="form-group">
                <label for="jalur_masuk" class="control-label">Jalur Masuk</label>
                <input type="text" class="form-control" name="jalur_masuk" id="jalur_masuk" required value="<?= $angkot["jalur_masuk"]?>" placeholder="Jalur Masuk" data-error="Isi Jalur Masuk" required>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <label for="jalur_keluar" class="control-label">Jalur Keluar</label>
                <input type="text" class="form-control" name="jalur_keluar" id="jalur_keluar" required value="<?= $angkot["jalur_keluar"]?>"placeholder="Jalur Keluar" data-error="Isi Jalur Keluar" required>
                <div class="help-block with-errors"></div>
              </div>
              
              <div class="form-group">
                <label for="gambar" class="col-sm-2 control-label" for="form-control-2">Gambar</label>
                <div class="col-sm-12">
                  <input id="form-control-11" type="file" name="gambar" id="gambar" required>
                  <p class="help-block">
                    <small>file berupa gambar .jpg atau .png</small>
                  </p>
                </div>
              </div>
              <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
            </form>
          </div>
        </div>
      </div>