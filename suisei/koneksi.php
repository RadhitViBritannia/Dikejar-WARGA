<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","pengaduan_masyarakat");

$page=@$_GET['page'];

?>