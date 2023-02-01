<?php
session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];

$page=@$_GET['page'];    

if(!empty($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Pengaduan Masyarakat</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="http://datatables.net/license_bsd"
		}>

<div class="container">
<div class="row">
<div class="col-lg-3 mt-5">
    <?php include "navigasi.php"; ?>
</div>

<div class="col-lg-9 mt-5">
    <?php
    if ($page=='isi_data') {
    include "isi_data.php";
    }
    elseif($page=='home' ||empty($page)){
        include 'home.php';
    }
    elseif($page=='catatan_perjalanan'){
        include 'catatan_perjalanan.php';
    }
    elseif($page=='logout'){
        unset($_SESSION['nik']);
        unset($_SESSION['nama']);
        header("location:login.php");
    }
    ?>
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
else{
    header("location:login.php");
}
?>