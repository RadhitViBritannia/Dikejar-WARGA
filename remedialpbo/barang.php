<?php
class barang {
    public $nama_barang;
    public $jumlah;
    public $harga;
}

class buku extends barang{
    public $isbn;
    public $pengarang;
    public $penerbit;

    public function peminjaman(){
        echo"buku dipinjam";
    }

    public function pengembalian(){
    echo"buku dikembalikan";
}
}

$barang = new buku;
$barang->nama_barang = "buku";
$barang->jumlah = "1";
$barang->harga = "10000";
echo $barang->peminjaman();
echo $barang->pengembalian();