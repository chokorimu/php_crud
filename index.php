<?php include 'koneksi.php'; // ini untuk import ?>      
<!DOCTYPE html>
<html style="font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6;">
    <body style="padding: 20px;">
        <div style="max-width: 900px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h2 style="color: #2c3e50;">📚 Sistem Informasi Perpustakaan Mini (Simper-Lib)</h2>
            
            <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                <a href="tambah.php" style="background: #27ae60; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">+ Tambah Buku</a>
                
                <form action="search.php" method="GET"> 
                <input type="text" name="keyword" placeholder="Cari judul/penulis..." style="padding: 8px; border: 1px solid #ddd;">
                <button type="submit" style="padding: 8px; background: #3498db; color: white; border: none; cursor: pointer;">Cari</button>
            </form>
        </div>

        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background: #2c3e50; color: white;">
                <th style="padding: 10px; border: 1px solid #ddd;">No</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Judul</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Penulis</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Aksi</th>
            </tr>
            <?php
            $no = 1;
            // mysqli_query(): Menjalankan instruksi SQL ke database melalui variabel $koneksi.
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_buku ORDER BY id_buku DESC");
            
            // mysqli_fetch_array(): Mengambil satu baris hasil query dan mengubahnya menjadi array.
            // fungsi untuk iterasi laci data. Query menghasilkan sekumpulan data (result set), dan fungsi ini mengambilnya satu baris demi satu baris untuk dijadikan array PHP $data agar bisa ditampilkan lewat echo.
            
            
            // while(): Melakukan perulangan selama mysqli_fetch_array masih menemukan baris data.
            while($data = mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; text-align: center;"><?= $no++; ?></td>
                <td style="padding: 10px; border: 1px solid #ddd;"><?= $data['judul']; ?></td>
                <td style="padding: 10px; border: 1px solid #ddd;"><?= $data['penulis']; ?></td>
                <td style="padding: 10px; border: 1px solid #ddd; text-align: center;">
                    <a href="edit.php?id=<?= $data['id_buku']; ?>" style="color: #3498db;">Edit</a> | 
                    <a href="hapus.php?id=<?= $data['id_buku']; ?>" style="color: #e74c3c;" onclick="return confirm('Hapus?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>