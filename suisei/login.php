<?php
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");
    $cek=mysqli_num_rows($query);
    $data=mysqli_fetch_array($query );

    if(!empty($cek)) {
        $alert='<div class="alert alert-success">Anda Berhasil Login</div>';
        $_SESSION['nik']=$data['nik'];
        echo '<meta http-equiv="refresh" content="1; url=http://localhost/suisei/index.php">';
    }
    else{
        $alert='<div class="alert alert-danger">Anda Gagal Login</div>';
    }
;}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORM LOGIN</title>
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
        <input type="text" name="username" placeholder="Username" class="form-control mb-3" required>
        <input type="password" name="password" placeholder="Password" class="form-control mb-3" required>
        <button name="login" class="btn btn-primary w-100">Login</button>
        <hr>
        <p class="small">
            Belum terdaftar? <a href="registrasi.php">Saya Pengguna Baru</a>
</P>
</form>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>