<?php
$id_trayek=$_GET['id_trayek'];
$rute=query("SELECT * FROM rute WHERE id_trayek=$id_trayek");
if(isset($_POST["tambah"])){
  var_dump($_POST);
  if(tambahLokasi($_POST)>0){
    echo "
    <script>
    document.location.href='index.php?page=tambah_lokasi&id_trayek=".$id_trayek."';
    </script>
    ";
  }else{
    echo "
    <script>
    alert('gagal');
    document.location.href='index.php?page=tambah_lokasi&id_trayek=".$id_trayek."';
    </script>
    ";
  }
}
?>
<div class="card">
  <div class="panel-heading">
    <strong><h3 class="m-y-0">Lokasi Trayek</h3></strong>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <form action="" method="post" data-toggle="validator">
        <div class="form-group">
          <input type="hidden" name="id_trayek" value="<?= $id_trayek; ?>">

          <label for="longtud" class="control-label">Longtitude</label>
          <input type="text" class="form-control" name="longtud" id="longtud" placeholder="Longtitude" >
        </div>
        <div class="form-group">
          <label for="latud" class="control-label">Latitude</label>
          <input type="text" class="form-control" name="latud" id="latitud" placeholder="Latitude" >
        </div>
        
        <button type="submit" name="tambah" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
  </div>
</div>

<hr>


<div class="row">
  <div class="col-sm-12">
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered dataTable" id="table-1">
          <thead>
            <tr>
              <th>No</th>
              <th>Longtude</th>
              <th>Latitude</th>
              <th>Tindakan</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;?>
            <?php
            foreach ($rute as $row) {
        # code...
              ?>
              <tr>
                <td>
                  <?= $i;?>
                </td>
                <td><?= $row['longtud'] ?></td>
                <td><?= $row['latud'] ?></td>
                <td>
                  <a href="index.php?page=hapus_lokasi&id=<?= $row["id"];?>" class="item" data-toggle="tooltip" data-placement="top" title="Hapus">
                    <i class="zmdi zmdi-delete"></i></a>   
                  </td>
                </tr>
                <?php
                $i++;
              } ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Longtude</th>
                <th>Latitude</th>
                <th>Tindakan</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="js/vendor.min.js"></script>
  <script src="js/cosmos.min.js"></script>
  <script src="js/application.min.js"></script>
  <script src="js/tables-datatables.min.js"></script> 