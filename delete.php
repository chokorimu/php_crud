<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM tb_buku WHERE id_buku = '$id'";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    echo "<script>alert('Buku berhasil dihapus!'); window.location='index.php';</script>";
}
?>