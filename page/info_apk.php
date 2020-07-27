<?php

$informasi=query("SELECT * FROM informasi ");

?>
<h3 class="title-5 m-b-35">Informasi Aplikasi</h3>

<hr>

<div class="row">
  <div class="col-sm-12">
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered dataTable" id="table-1">
          <thead>
            <tr>
              <th>Deskripsi</th>
              <th>Tindakan</th>
            </tr>
          </thead>
          <tbody>
           <!--  <?php $i = 1;?>  -->
           <?php
           foreach ($informasi as $row) {
        # code...
            ?>
            <tr>
          <!-- <td>
            <?= $i;?>
          </td>  -->
          <td><?= $row['deskripsi'] ?></td>
          <td>
            <div class="table-data-feature">
            </button>
            <a href="index.php?page=edit_info_apk&id=<?= $row["id"];?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
              <i class="zmdi zmdi-edit"></i></a>
              <a href="index.php?page=hapus_info_apk&id=<?= $row["id"];?>" class="item" data-toggle="tooltip" data-placement="top" title="Hapus">
                <i class="zmdi zmdi-delete"></i></a>        
              </div>
            </td>
          </tr>
          <?php
          $i++;
        } ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>

