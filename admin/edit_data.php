<?php 

include "../config/koneksi.php";

if(isset($_POST['hapus_pengaduan'])){
    $id_pengaduan = $_POST['id_pengaduan'];
    $query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
    $data = mysqli_fetch_array($query);
    if (is_file("../assets/img/".$data['foto'])) {
        unlink("../assets/img/".$data['foto']);
        mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
        header('location:index.php');
    }
}

if(isset($_POST['hapus_tanggapan'])){
    $id_pengaduan = $_POST['id_tanggapan'];
    $query = mysqli_query($koneksi, "DELETE * FROM tanggapan WHERE id_tanggapan='$id_tanggapan'");
    if ($query) {
        echo "<script>
        alert('data berhasil dihapus');
        window.location='index.php?page=tanggapan';
        </script>";
    }
  
}
?>