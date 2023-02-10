<?php
    session_start();

?>

<div class="container">
    <div class="row">
        <div class="col-md-12" mt-3>
            <p>Selamat Datang <?php echo $_SESSION['nama'] ?></p>
            <div class="card">
    <div class="card-header">
        FORM PENGADUAN
    </div>
<div class="card-body">
<form action="" method="POST">
    <div class="mb-3">
        <label class="form-label">Judul Laporan</label>
        <input type="text" class="form-control" name="judul_laporan" placeholder="Masukan Judul" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Isi Laporan</label>
        <textarea class="form-control" name="isi_laporan" placeholder="Masukan Isi Laporan" required></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" class="form-control" name="foto" required>
    </div>
    </div>
    <div class="card-footer">
    <button type="submit" name="kirim" class="btn btn-primary">KIRIM</button>
</div>
</form>
</div>

</div>
</div>

<div class="row">
    <div class="col-md-12 mt-3">
    <div class="card">
    <div class="card-header">
        FORM PENGADUAN
    </div>
<div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>JUDUL</th>
                <th>ISI</th>
                <th>FOTO</th>
                <th>STATUS</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Jalan Rusak</td>
                <td>Laporan jalan rusak di...</td>
                <td><img src="" width="100"></td>
                <td>Selesai
                    <a href="index.php?page=tanggapan">Lihat Tanggapan</a>
                </td>
                <td>
                    <a href="" class="btn btn-primary">EDIT</a>
                    <a href="" class="btn btn-danger">HAPUS</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>

</div>
</div>
</div>