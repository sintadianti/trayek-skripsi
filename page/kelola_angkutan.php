<?php
var_dump($_POST);
$angkot=query("SELECT * FROM angkot");

?>

<h3 class="title-5 m-b-35">Informasi Angkutan Kota (Angkot)</h3>
<hr>
<a href="index.php?page=tambah_angkutan" class="col-lg-2 col-sm-4 col-xs-6 m-y-5">
  <button type="button" class="btn btn-success m-w-120">Tambah Informasi Angkot</button>
</a>

<div class="row">
  <div class="col-sm-12">
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered dataTable" id="table-1">
          <thead>
            <tr>
              <th>No</th>
              <th>Trayek</th>
              <th>Warna Angkot</th>
              <th>Jurusan Angkot</th>
              <th>Ongkos Resmi</th>
              <th>Biasanya Ongkos</th>
              <th>Gambar</th>
              <th>Tindakan</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;?>
            <?php
            foreach ($angkot as $row) {
        # code...
              ?>
              <tr>
                <td>
                  <?= $i;?>
                </td>
                <td><?= $row['trayek'] ?></td>
                <td><?= $row['warna_angkot'] ?></td>
                <td><?= $row['jalur_angkot'] ?></td>
                <td><?= $row['ongkos1'] ?></td>
                <td><?= $row['ongkos2'] ?></td>
                <td><?= $row['gambar'] ?></td>
                <td>
                  <div class="table-data-feature">
                  </button>
                  <a href="index.php?page=edit_angkutan&id_trayek=<?= $row["id_trayek"];?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="zmdi zmdi-edit"></i></a>
                    <a href="index.php?page=hapus_angkutan&id_trayek=<?= $row["id_trayek"];?>" class="item" data-toggle="tooltip" data-placement="top" title="Hapus">
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
                <th>Trayek</th>
                <th>Warna Angkot</th>
                <th>Jurusan Angkot</th>
                <th>Ongkos Resmi</th>
                <th>Biasanya Ongkos</th>
                <th>Gambar</th>
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