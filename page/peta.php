<?php 
if($_GET['id_trayek']=='all'){
    $angkot=query("SELECT * FROM angkot");
}else{
    $data=$_GET['id_trayek'];
    $angkot=query("SELECT * FROM angkot WHERE id_trayek=$data");  
}

$angkot_aja=query("SELECT * FROM angkot");
$fasos=query("SELECT * FROM fasos ");
//var_dump($fasos);

?>


<center><h2>Peta Trayek Angkutan Kota (AngKot) Kabupaten Garut</h2></center>
<div class="row">
    <div class="col-lg-3">
        <label>Pilih trayek</label>
        <select class="form-control select2">
            <option>--Pilih Trayek--</option>
            <option value="all">Semua</option>
            <?php foreach ($angkot_aja as $data) : ?>
                <option value="<?= $data['id_trayek'] ?>"><?= $data['trayek'] ?></option>
            <?php endforeach ?>
        </select>
    </div>

</div>
<div id="map" style="width: 100%; height: 50em; display: block; position:relative"></div>
<script>
    var map = L.map('map').setView([-7.20932, 107.91746], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);



    <?php
    foreach ($fasos as $row => $fas) :
        ?>
        L.marker([<?= $fas['longtitude'] ?>, <?= $fas['latitude'] ?>]).addTo(map)
        .bindPopup("Tempat : <b><?= $fas['nama_tempat'] ?></b> </br> Desk: <?= $fas['deskripsi'] ?>")
        .openPopup();
        <?php
    endforeach;
    ?>
    var pp = [
    <?php
    foreach ($angkot as $row => $a) :
        $rute = query('SELECT * FROM rute WHERE id_trayek =' . $a['id_trayek']);
        ?>[
        <?php
        foreach ($rute as $row => $b) :
            ?> new L.LatLng(<?= $b['longtud']; ?>, <?= $b['latud']; ?>),
            <?php
        endforeach;
        ?>
        ],
        <?php
    endforeach;
    ?>
    ];


    var polylineOptions = [{
        color: 'red',
        weight: 5,
        opacity: 0.9
    },
    {
        color: 'blue',
        weight: 5,
        opacity: 0.9
    }
    ];

    poliline = [];
    for (var i = 0; i < pp.length; i++) {
        console.log(i)
        var polyline = new L.Polyline(pp[i], polylineOptions[i]);
        map.addLayer(polyline);

    }

            // zoom the map to the polyline
            map.fitBounds(polyline.getBounds());

        </script>
    </div>
    <script>
        $('.select2').select2();
        $(".select2").change(function() {
            value = $(this).val();
            document.location.href = 'index.php?page=peta&id_trayek=' + value;
        });
    </script>