<a href="?page=form-pengaduan" class="btn btn-primary">Tulis Pengaduan</a>

<div class="row mt-4">
    <?php
    $q=mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE nik='$nik'");
    while ($data=mysqli_fetch_array($q)) {
        ?>
        <div class="col-md-6 col-lg-3">
            <div class="card">
            <img src="<?php echo 'img/'.$data['foto']?>" class="card-img-top" alt="<?php echo 'img/'.$data['foto']?>...">
                <div class="card-body">
                <p class="small mb-0"><?php echo $data['tgl_pengaduan']?></p>
                <p class="card-text">
                    <?php
                        echo substr($data['isi_laporan'],0,50)."...";
                    ?>
                    </p>
                    <a href="?page=detail-pengaduan&&id_pengaduan=<?php echo $data['id_pengaduan'] ?>" class="btn btn-primary">Detail</a>
                    <a href="#" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>