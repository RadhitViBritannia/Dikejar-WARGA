<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

$koneksi = new PDO('mysql:host=localhost;dbname=pengaduan_masyarakat;','root','');
$query = $koneksi->query("SELECT * FROM `masyarakat` WHERE username='$username' AND password='$password'");
$data = $query->fetch();
if ($query){
    $_SESSION["username"] = $_REQUEST['username'];
    $_SESSION["password"] = $_REQUEST['password'];
    header("Location:index.php?page=home");
    
if(mysqli_connect()){
    echo "Login Berhasil";
}else{
    echo "Login Gagal";
}

// jika di tekan tombol pengguna baru
if (isset($_POST['pengguna_baru'])) {

}
// jika di tekan tombol masuk
elseif(isset($_POST['masuk'])) {
    echo"masuk";

}else{
    header("Location:login.php?msg={$msg}");
}
}
?>