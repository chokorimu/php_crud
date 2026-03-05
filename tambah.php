<?php
include 'koneksi.php';

// Memeriksa apakah $_POST['submit'] sudah dikirim (tombol diklik)
if(isset($_POST['submit'])){
    // $_POST: Method untuk mengambil data dari body HTTP request (tidak terlihat di URL, lebih aman untuk form)
    $judul    = $_POST['judul'];
    $penulis  = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun    = $_POST['tahun'];

    // Menjalankan query INSERT
    $query = "INSERT INTO tb_buku (judul, penulis, penerbit, tahun) VALUES ('$judul', '$penulis', '$penerbit', '$tahun')";
    $hasil = mysqli_query($koneksi, $query);

    if($hasil){
        echo "<script>alert('Berhasil!'); window.location='index.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html style="font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6;">
<body style="padding: 50px;">
    <div style="max-width: 500px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
        <h3 style="color: #2c3e50;">Tambah Koleksi Buku</h3>
        <hr>
        <form method="POST" action="">
            <label style="display: block; margin-bottom: 5px;">Judul Buku</label>
            <input type="text" name="judul" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
            
            <label style="display: block; margin-bottom: 5px;">Nama Penulis</label>
            <input type="text" name="penulis" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
            
            <label style="display: block; margin-bottom: 5px;">Penerbit</label>
            <input type="text" name="penerbit" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
            
            <label style="display: block; margin-bottom: 5px;">Tahun Terbit</label>
            <input type="number" name="tahun" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
            
            <button type="submit" name="submit" style="width: 100%; background: #27ae60; color: white; border: none; padding: 12px; border-radius: 5px; cursor: pointer; font-size: 16px;">Simpan Data</button>
            <a href="index.php" style="display: block; text-align: center; margin-top: 15px; color: #7f8c8d; text-decoration: none;">Kembali</a>
        </form>
    </div>
</body>
</html>