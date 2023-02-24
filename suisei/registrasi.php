<?php
include 'koneksi.php';

if (isset($_POST['registrasi'])) {
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $telp=$_POST['telp'];

    $query=mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE nik='$nik' or username='$username'");
    $cek=mysqli_num_rows($query);

    if (empty($cek)) {
    $registrasi=mysqli_query($koneksi, "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp')");
    if ($registrasi){
        $alert='<div class="alert alert-success">Anda Berhasil Registrasi</div>';
        echo '<meta http-equiv="refresh" content="1; url=http://localhost/suisei/login.php">';
    }
    }
    else{
        $alert='<div class="alert alert-danger">Nik atau Username sudah terpakai</div>';
    }

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORM REGISTRASI</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-lg-4">
<div class="card shadow mt-5 shadow border-0">
<div class="card-body">
<h5 class="text-primary text-center">
    PENGADUAN MASYARAKAT
</h5>
<hr>
<?php echo @$alert ?>
<form action="" method="POST">
        <input type="number" name="nik" placeholder="Nik" class="form-control mb-3" required>
        <input type="text" name="nama" placeholder="Nama" class="form-control mb-3" required>
        <input type="text" name="username" placeholder="Username" class="form-control mb-3" required>
        <input type="password" name="password" placeholder="Password" class="form-control mb-3" required>
        <input type="number" name="telp" placeholder="No Telp" class="form-control mb-3" required>
        <button name="registrasi" class="btn btn-primary w-100">Registrasi</button>
        
</form>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>