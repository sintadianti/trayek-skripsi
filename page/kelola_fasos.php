<?php
$fasos=query("SELECT * FROM fasos ");

?>
<h3 class="title-5 m-b-35">Fasilitas Sosial</h3>
<hr>
<a href="index.php?page=tambah_fasos" class="col-lg-2 col-sm-4 col-xs-6 m-y-5">
    <button type="button" class="btn btn-success m-w-120">Tambah Fasilitas Sosial</button>
</a>

<div class="row">
<div class="col-sm-12">
<div class="panel-body">
  <div class="table-responsive">
    <table class="table table-striped table-bordered dataTable" id="table-1">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Tempat</th>
          <th>Deskripsi</th>
          <th>Longtitude</th>
          <th>Latitude</th>
          <th>Tindakan</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;?>
        <?php
        foreach ($fasos as $row) {
        # code...
        ?>
        <tr>
          <td>
             <?= $i;?>
          </td>
          <td><?= $row['nama_tempat'] ?></td>
          <td><?= $row['deskripsi'] ?></td>
          <td><?= $row['longtitude'] ?></td>
          <td><?= $row['latitude'] ?></td>
          <td>
            <div class="table-data-feature">
                    </button>
                    <a href="index.php?page=edit_fasos&id=<?= $row["id"];?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="zmdi zmdi-edit"></i></a>
                    <a href="index.php?page=hapus_fasos&id=<?= $row["id"];?>" class="item" data-toggle="tooltip" data-placement="top" title="Hapus">
                    <i class="zmdi zmdi-delete"></i></a>        
            </div>
          </td>
        </tr>
        <?php
        $i++;
        } ?>
      </tbody>
      <tfoot>
         <tr>
          <th>No</th>
          <th>Nama Tempat</th>
          <th>Deskripsi</th>
          <th>Longtitude</th>
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




