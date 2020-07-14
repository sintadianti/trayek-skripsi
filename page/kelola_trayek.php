<?php
$angkot=query("SELECT * FROM angkot");

?>
<center><h3 class="title-5 m-b-35">Informasi Trayek Angkutan Kota (Angkot)</h3>
  <p class="help-block">
    <small>Mengelola informasi mengenai trayek dan angkutan kota (angkot) yang beroperasi di Kabupaten Garut </small>
  </p>
</center>
<hr>
<a href="index.php?page=tambah_trayek" class="col-lg-2 col-sm-4 col-xs-6 m-y-5">
    <button type="button" class="btn btn-success m-w-120">Tambah Trayek Angkot</button>
</a> 

<div class="row">
<div class="col-sm-12">
<div class="panel-body">
  <div class="table-responsive">
    <table class="table table-striped table-bordered dataTable" id="table-1">
      <thead>
        <tr>
          <th>No</th>
          <th>No Trayek</th>
          <th>Jurusan Angkot</th>
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
          <td><?= $row['jalur_angkot'] ?></td>
          <td>
            <div class="table-data-feature">
                    </button>
                    <center>
                    <a style="margin: 5px;" href="index.php?page=detail_angkot&id_trayek=<?= $row["id_trayek"];?>" class="item" data-toggle="" data-placement="top" title="Detail Angkot"><i class="zmdi zmdi-eye"></i></a>
                    <a style="margin: 5px;" href="index.php?page=tambah_lokasi&id_trayek=<?= $row["id_trayek"];?>" class="item" data-toggle="" data-placement="top" title="Tambah lokasi">
                    <i class="zmdi zmdi-plus"></i></a>
                    <a style="margin: 5px;" href="index.php?page=edit_trayek&id_trayek=<?= $row["id_trayek"];?>" class="item" data-toggle="" data-placement="top" title="Edit">
                    <i class="zmdi zmdi-edit"></i></a>
                    <a style="margin: 5px;" href="index.php?page=hapus_trayek&id_trayek=<?= $row["id_trayek"];?>" class="item" data-toggle="" data-placement="top" title="Hapus">
                    <i class="zmdi zmdi-delete"></i></a>
                    </center>
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
          <th>No Trayek</th>
          <th>Jurusan Angkot</th>
          <th>Tindakan</th>
          </tr>
      </tfoot>
    </table>
  </div>
</div>
</div>
</div>


<!--<div id="successModal2" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="zmdi zmdi-close"></i>
                    </span>
                </button>
                <h4 class="modal-title"><?= $row['trayek'] ?></h4>
              </div>
                <div class="modal-body">
                <center><img src="img/<?= $row['gambar'] ?>" height="100px" align="center" alt=""></td></center>
                <p class="">Warna Angkot    : <?= $row['warna_angkot'] ?></p>
                <p class="">Ongkos Resmi    : <?= $row['ongkos1'] ?></p>
                <p class="">Titik awal      : <?= $row['titik_awal'] ?></p>
                <p class="">Titik akhir     : <?= $row['titik_akhir'] ?></p>
                <p class="">Jalur Masuk     : <?= $row['jalur_masuk'] ?></p>
                <p class="">Jalur Keluar    : <?= $row['jalur_keluar'] ?></p>
                </div>
            </div>
          </div>
        </div>-->
<script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/tables-datatables.min.js"></script> 