<?php
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db   = "biodata"; 

// mysqli_connect(): Membuka koneksi baru ke server MySQL.
$koneksi = mysqli_connect($host, $user, $pass, $db);

// if(!$koneksi): Mengecek apakah koneksi bernilai FALSE (gagal).
if (!$koneksi) {
    // mysqli_connect_error(): Mengambil pesan error teknis dari percobaan koneksi terakhir.
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>