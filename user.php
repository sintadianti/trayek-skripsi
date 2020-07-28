
<?php
session_start();

if(isset($_SESSION["login"])){
  header("Location: index.php?page=halaman_utama");
  exit;
}

require 'function/function.php';
$page = isset($_GET["page"]) ? $_GET["page"] : 'dashboard';

if ($_GET['id_trayek'] == 'all') {
    $angkot = query("SELECT * FROM angkot");
} else {
    $data = $_GET['id_trayek'];
    $angkot = query("SELECT * FROM angkot WHERE id_trayek=$data");
}

$angkot_aja = query("SELECT * FROM angkot");
$fasos = query("SELECT * FROM fasos ");

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from big-bang-studio.com/cosmos/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:55:36 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <title>Angkot Garut</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/cosmos.min.css">
    <link rel="stylesheet" href="css/application.min.css">
    <link rel="stylesheet" href="assets/leaflet/leaflet.css">
    <script src="assets/leaflet/leaflet.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <style>
        .select2-container .select2-selection--single {
            height: 34px !important;
        }

        .select2-container--default .select2-selection--single {
            border: 1px solid #ccc !important;
            border-radius: 0px !important;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="nav nav-tabs nav-tabs-custom nav-justified m-b-15">

                    <a href="#peta" role="tab" data-toggle="tab">
                        <i class="zmdi zmdi-pin"></i>Peta Trayek</a>
                    </li>
                    <li>
                        <a href="#angkot" role="tab" data-toggle="tab">
                            <i class="zmdi zmdi-directions-car"></i> Informasi Angkutan Umum</a>
                        </li>
                        <li>
                            <a href="#info" role="tab" data-toggle="tab">
                                <i class="zmdi zmdi-info"></i> Informasi Aplikasi</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in " id="peta">
                                <center>
                                    <h2>Peta Trayek Angkutan Kota (AngKot) Kabupaten Garut</h2>
                                </center>
                                <div class="row">
                                    <div class="col-lg-3 pull-right">
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


                            </div>
                            
                            <div role="tabpanel" class="tab-pane fade" id="angkot">
                                <?php
                                $angkot = query("SELECT * FROM angkot");
                                ?>
                                <center>
                                    <h3 class="title-5 m-b-35">Informasi Angkutan Kota (Angkot)</h3>
                                    <p class="help-block">
                                        <small>Informasi mengenai angkutan kota (angkot) yang beroperasi di Kabupaten Garut </small>
                                    </p>
                                </center>
                                <hr>
                                <?php
                                foreach ($angkot as $row) :
                                    ?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="catalog-products">
                                            <div class="c-product">
                                                <a class="cp-img" style="background-image: url(img/<?= $row['gambar'] ?>)" href="#">
                                                </a>
                                                <!-- <img src="img/" alt=""> -->
                                                <div class="cp-content">

                                                    <div class="cp-title"><?= $row['trayek'] ?></div>
                                                    <a href="detail.php?id_trayek=<?= $row["id_trayek"]; ?>" type="button" class="btn btn-success m-w-120">Detail Angkot</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endforeach;
                                ?>


                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="info">

                            </div>
                        </div>
                    </div>
                </div>

                <script src="js/vendor.min.js"></script>
                <script src="js/cosmos.min.js"></script>
                <script src="js/application.min.js"></script>

                <script>
                    $('.select2').select2();
                    $(".select2").change(function() {
                        value = $(this).val();
                        document.location.href = 'user.php?id_trayek=' + value;
                    });
                </script>
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
                    </body>

                    </html>