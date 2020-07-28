<?php 
$conn=mysqli_connect("localhost","root","","trayek_angkot");

//fungsi query
function query($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[]=$row;
    }
    return $rows;
}


function tambahTrayek($data){
    global $conn;
    $trayek=htmlspecialchars($data["trayek"]);
    $jalur_angkot=htmlspecialchars($data["jalur_angkot"]);
    $warna_angkot=htmlspecialchars($data["warna_angkot"]);
    $ongkos1=htmlspecialchars($data["ongkos1"]);
    $titik_awal=htmlspecialchars($data["titik_awal"]);
    $titik_akhir=htmlspecialchars($data["titik_akhir"]);
    $jalur_masuk=htmlspecialchars($data["jalur_masuk"]);
    $jalur_keluar=htmlspecialchars($data["jalur_keluar"]);
    var_dump($data);
        //upload gambar
    $gambar =upload();
    
    if(!$gambar){
        return false;
    }
    
    $query="INSERT INTO angkot
    VALUES
    ('','$trayek','$jalur_angkot','$warna_angkot','$ongkos1','$titik_awal','$titik_akhir','$jalur_masuk','$jalur_keluar','$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile =$_FILES['gambar']['name'];
    $ukuranFile=$_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName=$_FILES['gambar']['tmp_name'];

    //cek apakah gambar telah di upload
    if($error===4){
        echo "<script>
        alert('pilih gambar terlebih dahulu !!!');
        </script>";
        return false;
    }

    //validasi apakah yang di upload adalah gambar
    $extensiGambarValid=['jpg','jpeg','png','JPEG','JPG','PNG'];
    $extensiGambar=explode('.',$namaFile);
    $extensiGambar=strtolower(end($extensiGambar));
    
    if(!in_array($extensiGambar,$extensiGambarValid)){
        echo "<script>
        alert('yang anda upload bukan gambar');
        </script>";
        return false;
    }

    //cek ukuran apabila ingin dibatasi
    if($ukuranFile > 1000000){
        echo "<script>
        alert('gambar yang anda masukan terlalu besar');
        </script>";
        return false;
    }

    //lolos pengecekan diatas maka gambar akan di upload
    //generate nama gambar baru
    $namaFileBaru = 'img_';
    $namaFileBaru .= uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensiGambar;

    move_uploaded_file($tmpName,'img/'.$namaFileBaru);
    return $namaFileBaru;
}

function editTrayek($data){
    global $conn;
    $id_trayek=htmlspecialchars($data["id_trayek"]);
    $trayek=htmlspecialchars($data["trayek"]);
    $jalur_angkot=htmlspecialchars($data["jalur_angkot"]);
    $warna_angkot=htmlspecialchars($data["warna_angkot"]);
    $ongkos1=htmlspecialchars($data["ongkos1"]);
    $titik_awal=htmlspecialchars($data["titik_awal"]);
    $titik_akhir=htmlspecialchars($data["titik_akhir"]);
    $jalur_masuk=htmlspecialchars($data["jalur_masuk"]);
    $jalur_keluar=htmlspecialchars($data["jalur_keluar"]);
    // $gambar=htmlspecialchars($data["gambar"]);
    
    // var_dump($_FILES['gambar']['error']===4);die();
    //cek apakah gambar lama diupload apa tidak
    if($_FILES['gambar']['error']===4){
        $gambar=$gambarLama;
    }else{
        $gambar=upload();
    }
    // query insert data
    $query="UPDATE angkot  SET
    trayek='$trayek',
    jalur_angkot='$jalur_angkot',
    warna_angkot='$warna_angkot',
    ongkos1='$ongkos1',
    titik_awal='$titik_awal',
    titik_akhir='$titik_akhir',
    jalur_masuk='$jalur_masuk',
    jalur_keluar='$jalur_keluar',
    gambar='$gambar'

    WHERE id_trayek= '$id_trayek'
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapusTrayek($id_trayek){
    global $conn;
    mysqli_query($conn,"DELETE FROM angkot WHERE id_trayek=$id_trayek");
    
    return mysqli_affected_rows($conn);
}

function tambahLokasi($data){
    global $conn;
    $id_trayek=htmlspecialchars($data["id_trayek"]);
    $longtud=htmlspecialchars($data["longtud"]);
    $latud=htmlspecialchars($data["latud"]);
    $query="INSERT INTO rute
    VALUES
    ('','$id_trayek','$longtud','$latud')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahFasos($data){
    global $conn;
    $nama_tempat=htmlspecialchars($data["nama_tempat"]);
    $deskripsi=htmlspecialchars($data["deskripsi"]);
    $longtitude=htmlspecialchars($data["longtitude"]);
    $latitude=htmlspecialchars($data["latitude"]);
    $query="INSERT INTO fasos
    VALUES
    ('','$nama_tempat','$deskripsi','$longtitude','$latitude')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function editFasos($data){
    global $conn;
    $id=htmlspecialchars($data["id"]);
    $nama_tempat=htmlspecialchars($data["nama_tempat"]);
    $deskripsi=htmlspecialchars($data["deskripsi"]);
    $longtitude=htmlspecialchars($data["longtitude"]);
    $latitude=htmlspecialchars($data["latitude"]);

    // query insert data
    $query="UPDATE fasos SET
    nama_tempat='$nama_tempat',
    deskripsi='$deskripsi',
    longtitude='$longtitude',
    latitude='$latitude'
    

    WHERE id= '$id'
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapusFasos($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM fasos WHERE id=$id");
    
    return mysqli_affected_rows($conn);
}

function hapusLokasi($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM rute WHERE id=$id");
    
    return mysqli_affected_rows($conn);
}

function tambahAdmin($data){
    global $conn;
    $nama=htmlspecialchars($data["nama"]);
    $username=htmlspecialchars($data["username"]);
    $password=htmlspecialchars($data["password"]);
    //enkripsi password 
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah terdaftar!!'); </script>
        ";  
        return false;
    }



    // cek konfirmasi password
    // if ($password !== $password2) {
    //     echo "<script>
    //     alert('password tidak sesuai!!'); </script>
    //     ";
    //     return false;
    // }
    // return 1;

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    // tambahkan userbaru ke  database
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$nama','$username', '$password')
        ");
    return mysqli_affected_rows($conn);

}

function editAdmin($data){
    global $conn;
    // ambil data dari tiap elemen data form
    $id = $data["id"];
    $nama=htmlspecialchars($data["nama"]);
    $username=htmlspecialchars($data["username"]);
    $password=htmlspecialchars($data["passwordBaru"]);


    $query = "UPDATE  user SET 

    nama = '$nama', 
    username = '$username', 
    password = '$password' 

    WHERE id = '$id'
    ";
    mysqli_query($conn, $query);
    var_dump($_POST);

    return mysqli_affected_rows($conn);
}

function hapusUser($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM user WHERE id=$id");
    
    return mysqli_affected_rows($conn);
}

function editInfo($data){
    global $conn;
    // ambil data dari tiap elemen data form
    $id = $data["id"];
    $deskripsi=htmlspecialchars($data["deskripsi"]);


    $query = "UPDATE  informasi SET 

    deskripsi = '$deskripsi' 

    WHERE id = '$id'
    ";
    mysqli_query($conn, $query);
    var_dump($_POST);

    return mysqli_affected_rows($conn);
}
function hapusInfo($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM informasi WHERE id=$id");
    
    return mysqli_affected_rows($conn);
}
