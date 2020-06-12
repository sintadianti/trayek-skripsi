<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script> -->
    <link rel="stylesheet" href="leaflet/leaflet.css">
    <script src="leaflet/leaflet.js"></script>
    <!-- <script src="https://cdn-webgl.wrld3d.com/wrldjs/dist/latest/wrld.js"></script> -->

</head>

<body>
    <div id="map" style="width: 100%; height: 50em; display: block; position:relative"></div>
</body>
<script>
    var map = L.map('map').setView([-7.3425596, 107.4979499], 20);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var pp = [
        new L.LatLng(-7.20932,107.91746) ,
        new L.LatLng(-7.21145,107.91810) ,
        new L.LatLng(-7.21320,107.91928) ,
        new L.LatLng(-7.21599,107.92107) ,
        new L.LatLng(-7.22031,107.92112) ,
        new L.LatLng(-7.22476,107.91812) ,
        new L.LatLng(-7.22635,107.91565) ,
        new L.LatLng(-7.22678,107.91469) ,
        new L.LatLng(-7.22733,107.91390) ,
        new L.LatLng(-7.22736,107.91222) ,
        new L.LatLng(-7.22821,107.91130) ,
        new L.LatLng(-7.22855,107.91121) ,
        new L.LatLng(-7.22879,107.91091) ,
        new L.LatLng(-7.22909,107.91001) ,
        new L.LatLng(-7.22926,107.90850) ,
        new L.LatLng(-7.22881,107.90679) ,
        new L.LatLng(-7.22052,107.90630) ,
        new L.LatLng(-7.21880,107.90618) ,
        new L.LatLng(-7.21867,107.90462) ,
        new L.LatLng(-7.22046,107.90444) ,
        new L.LatLng(-7.22039,107.90351) ,
        new L.LatLng(-7.21985,107.90145) ,
        new L.LatLng(-7.21772,107.90165) ,
        new L.LatLng(-7.21680,107.90173) ,
        new L.LatLng(-7.21678,107.90192) ,
        new L.LatLng(-7.21580,107.90199) ,
        new L.LatLng(-7.21483,107.90202) ,
        new L.LatLng(-7.21397,107.90206) ,
        new L.LatLng(-7.21344,107.90210) ,
        new L.LatLng(-7.21314,107.90210) ,
        new L.LatLng(-7.21236,107.90214) ,
        new L.LatLng(-7.21178,107.90215) ,
        new L.LatLng(-7.21170,107.90205) ,
        new L.LatLng(-7.21161,107.90202) ,
        new L.LatLng(-7.21151,107.90207) ,
        new L.LatLng(-7.21148,107.90215) ,
        new L.LatLng(-7.21067,107.90220) ,
        new L.LatLng(-7.20981,107.90224) ,
        new L.LatLng(-7.20932,107.90224) ,
        new L.LatLng(-7.20875,107.90231) ,
        new L.LatLng(-7.20798,107.90268) ,
        new L.LatLng(-7.20743,107.90288) ,
        new L.LatLng(-7.20721,107.90291) ,
        new L.LatLng(-7.20714,107.90282) ,
        new L.LatLng(-7.20703,107.90283) ,
        new L.LatLng(-7.20696,107.90288) ,
        new L.LatLng(-7.20700,107.90298) ,
        new L.LatLng(-7.20704,107.90303) ,
        new L.LatLng(-7.20680,107.90365) ,
        new L.LatLng(-7.20666,107.90415) ,
        new L.LatLng(-7.20651,107.90473) ,
        new L.LatLng(-7.20638,107.90494) ,
        new L.LatLng(-7.20615,107.90525) ,
        new L.LatLng(-7.20584,107.90539) ,
        new L.LatLng(-7.20483,107.90538) ,
        new L.LatLng(-7.20418,107.90533) ,
        new L.LatLng(-7.20366,107.90526) ,
        new L.LatLng(-7.20280,107.90523) ,
        new L.LatLng(-7.20288,107.90594) ,
        new L.LatLng(-7.20283,107.90613) ,
        new L.LatLng(-7.20202,107.90624) ,
        new L.LatLng(-7.20176,107.90626) ,
        new L.LatLng(-7.20160,107.90620) ,
        new L.LatLng(-7.20144,107.90601) ,
        new L.LatLng(-7.20136,107.90588) ,
        new L.LatLng(-7.20126,107.90535) ,
        new L.LatLng(-7.20053,107.90544) ,
        new L.LatLng(-7.19987,107.90555) ,
        new L.LatLng(-7.20001,107.90621) ,
        new L.LatLng(-7.20018,107.90622) ,
        new L.LatLng(-7.20029,107.90626) ,

   ];

    var polylineOptions = {
        color: 'blue',
        weight: 5,
        opacity: 0.9
    };

    var polyline = new L.Polyline(pp, polylineOptions);

    map.addLayer(polyline);

    // zoom the map to the polyline
    map.fitBounds(polyline.getBounds());
</script>

</html>