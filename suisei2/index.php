<?php
session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];

$page = $_GET['page'];    

if(!empty($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aplikasi Pengaduan Masyarakat</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="http://datatables.net/license_bsd"
		}>

<div class="container">
<div class="row">
<div class="col-lg-3 mt-5">
</div>
<div class="col-lg-9 mt-5">
    
<?php
if (isset($_GET['page'])){
    $page= $_GET['page'];

    switch ($page){
        case 'login':
            include 'login.php';
            break;
            case 'registrasi':
            include 'registrasi.php';
            break;
            
        default:
            echo "Halaman tidak tersedia";
            break;
    }
} else {
    include 'home.php';
}
    ?>

<footer class="footer py-2 bg-light fixed-bottom">
    <div class="container">
        <p class="text-center">UKK RPL 2023 | Nama Peserta | Nama Sekolah</p>
    </div>
</footer>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="data_table/jquery.datatable.js"></script>
<script src="data_table/datatable.bootstrap.js"></script>

</body>
</html>
<?php
}