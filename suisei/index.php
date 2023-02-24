<?php
include 'koneksi.php';

if (!empty($_SESSION['nik'])) {

  $nik=$_SESSION['nik'];

$user=mysqli_fetch_array(mysqli_Query($koneksi, "SELECT * FROM masyarakat WHERE nik='$_SESSION[nik]'"));

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aplikasi Pengaduan Masyarakat | Nama Peserta</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    </head>
    <body>
     
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
            <div class="container">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand me-auto ms-2" href="#">APLIKASI PENGADUAN MASYARAKAT</a>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title text-primary" id="offcanvasExampleLabel">PENGADUAN MASYARAKAT</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <nav class="nav flex-column">
  <a class="nav-link text-secondary <?php if($page=='dashboard'){echo'bg-primary text-white';} ?>" href="?page=dashboard">Dashboard</a>
  <a class="nav-link text-secondary <?php if($page=='pengaduan' or $page=='form-pengaduan' or $page=='detail-pengaduan'){echo'bg-primary text-white';} ?>" href="?page=pengaduan">Pengaduan</a>
  <hr>
    <a href="?page=logout" class="nav-link text-secondary">Logout</a>
</nav>
  </div>
</div>

<!-- content -->
<div class="container mt-5">
    <?php
      
    if ($page=='pengaduan') {
      include 'masyarakat/pengaduan.php';
    }
    elseif ($page=='dashboard') {
      include 'masyarakat/dashboard.php';
    }
    elseif ($page=='form-pengaduan') {
      include 'masyarakat/form-pengaduan.php';
    }
    elseif ($page=='detail-pengaduan') {
      include 'masyarakat/detail-pengaduan.php';
    }
    elseif ($page=='logout'){
        unset($_SESSION['nik']);
        header('location:login.php');
    }
    else{
      header("location:?page=dashboard");
    }

    ?>
</div>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
else{
  header('location:login.php');
}