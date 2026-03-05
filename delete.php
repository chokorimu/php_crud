<?php
include 'koneksi.php'; // Mengambil jalur akses ke database

// Menangkap ID unik dari parameter URL
$id = $_GET['id'];

// Perintah SQL DELETE: Menghapus data spesifik berdasarkan Primary Key
$query = "DELETE FROM tb_buku WHERE id_buku = '$id'";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    // Alert JavaScript untuk konfirmasi visual
    echo "<script>alert('Buku berhasil dihapus!'); window.location='index.php';</script>";
}
?>