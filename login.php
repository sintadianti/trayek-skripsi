<?php
session_start();
require 'function/function.php';
// $profil= query("SELECT * FROM profil ")[0];
// var_dump($profil);
if(isset($_SESSION["login"])){
  header("Location: index.php?page=halaman_utama");
  exit;
}

if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result=mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
    //cek username
  var_dump($result);
  if(mysqli_num_rows($result)==1){
        //cek password
    $row=mysqli_fetch_assoc($result);
    if(password_verify($password,$row["password"]) ){
            //set session
      $_SESSION["id"]=$row["id"];
      $_SESSION["username"]=$row["username"];  
      $_SESSION["login"]= true;          

      header("Location:index.php?page=halaman_utama");
      exit;
    }
  }
  $error=true;
}
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
</head>
<body>
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <form action="" method="post">
        <div class="authentication-content m-b-30">
          <center><img src="img/angkot.png" alt="" height="60"></center>
          <h3 class="m-t-0 m-b-30 text-center">Angkot Garut</h3>
          <form>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-info btn-block" name="login">Login</button>
          </form>
        </div>
      </form>
    </div>
  </div>
  <div class="authentication-footer">
    <span class="text-muted">Dinas Perhubungan Kabupaten Garut</span>
  </div>
</body>
</html>