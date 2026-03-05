<?php
include 'koneksi.php';

// Menangkap ID dari URL.
$id = $_GET['id'];

// Mengambil data spesifik berdasarkan ID untuk "mengisi" form (pre-fill).
$query = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE id_buku = '$id'");
$data = mysqli_fetch_array($query);

// Logika saat tombol 'update' diklik.
if(isset($_POST['update'])){
    // Mengambil SEMUA data dari form agar sinkron dengan database.
    $judul    = $_POST['judul'];
    $penulis  = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun    = $_POST['tahun'];

    // SQL UPDATE: Mengubah data pada kolom tertentu berdasarkan ID (Identifier).
    // Pastikan semua kolom (penerbit & tahun) masuk dalam query ini agar data tidak hilang.
    $query_update = "UPDATE tb_buku SET 
                    judul='$judul', 
                    penulis='$penulis', 
                    penerbit='$penerbit', 
                    tahun='$tahun' 
                    WHERE id_buku='$id'";
    
    $exec = mysqli_query($koneksi, $query_update);
    
    if($exec){ // Jika asisten (mysqli_query) melaporkan tugas selesai
        // Navigasi otomatis diletakkan di sini
        header("Location: index.php"); // Memerintah browser pindah ke index.php
        exit; // Menghentikan script agar tidak memproses baris di bawahnya
    }
}
?>

<!DOCTYPE html>
<html style="font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6;">
<body style="padding: 50px;">
    <div style="max-width: 450px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
        <h3 style="color: #2c3e50;">Edit Informasi Buku</h3>
        <hr>
        <form method="POST">
            <label style="display:block; margin-top:10px;">Judul Buku</label>
            <input type="text" name="judul" value="<?= $data['judul']; ?>" required style="width: 100%; padding: 8px; margin-top: 5px;">
            
            <label style="display:block; margin-top:10px;">Penulis</label>
            <input type="text" name="penulis" value="<?= $data['penulis']; ?>" required style="width: 100%; padding: 8px; margin-top: 5px;">

            <label style="display:block; margin-top:10px;">Penerbit</label>
            <input type="text" name="penerbit" value="<?= $data['penerbit']; ?>" required style="width: 100%; padding: 8px; margin-top: 5px;">

            <label style="display:block; margin-top:10px;">Tahun Terbit</label>
            <input type="number" name="tahun" value="<?= $data['tahun']; ?>" required style="width: 100%; padding: 8px; margin-top: 5px;">
            
            <button type="submit" name="update" style="width: 100%; background: #3498db; color: white; border: none; padding: 12px; border-radius: 5px; cursor: pointer; font-weight: bold; margin-top: 20px;">Simpan Perubahan</button>
            <a href="index.php" style="display: block; text-align: center; margin-top: 15px; color: #7f8c8d; text-decoration: none;">Batal</a>
        </form>
    </div>
</body>
</html>