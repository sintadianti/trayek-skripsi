<?php

$admin=query("SELECT * FROM user ");

?>

<h3 class="title-5 m-b-35">Kelola Petugas</h3>
<a href="index.php?page=tambah_admin" class="col-lg-2 col-sm-4 col-xs-6 m-y-5">
  <button type="button" class="btn btn-success m-w-120">Tambah Petugas</button>
</a>
<hr>
<div class="row">
  <div class="col-sm-12">
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered dataTable" id="table-1">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Tindakan</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;?>
            <?php
            foreach ($admin as $row) {
        # code...
              ?>
              <tr>
                <td>
                  <?= $i;?>
                </td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['username'] ?></td>
                <td>
                  <div class="table-data-feature">
                    <a href="index.php?page=edit_admin&id=<?= $row["id"];?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                      <i class="zmdi zmdi-edit"></i></a>
                      <a href="index.php?page=hapus_admin&id=<?= $row["id"];?>" onclick="return confirm('yakin ingin menghapus data?')" class="item" data-toggle="tooltip" data-placement="top" title="Hapus">
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
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Tindakan</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>

