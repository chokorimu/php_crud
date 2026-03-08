<?php include 'koneksi.php'; ?>      
<!DOCTYPE html>
<html style="font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6;">
    <body style="margin: 0; padding: 0;">
        <div style="position: sticky; top: 0; display: flex; justify-content: space-between; align-items: center; background: #5eb3be; margin: 0; padding: 10px 20px; border-radius: 0;">
            <h4 style="color: #2c3e50; margin: 0;">
                Sistem Informasi Perpustakaan Mini (Simper-Lib)
            </h4>
            <form action="search.php" method="GET" style="margin: 0; display: flex; gap: 5px;"> 
                <a href="tambah.php" style="background: #27ae60; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">
                    + Tambah Buku
                </a>
                <input type="text" name="keyword" placeholder="Cari judul/penulis" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                <button type="submit" style="padding: 8px 15px; background: #3498db; color: white; border: none; border-radius: 4px; cursor: pointer;">
                    Cari
                </button>
            </form>
        </div>
        <div style="display: flex; max-width: 900px; margin: 20px 20px; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background: #2c3e50; color: white;">
                <th style="padding: 10px 0px; border: 1px solid #ddd;">No</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Judul</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Penulis</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Aksi</th>
            </tr>

            <?php $no = 1;
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_buku ORDER BY id_buku DESC");

            while($data = mysqli_fetch_array($sql)){ ?>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; text-align: center;"><?= $no++; ?></td>
                <td style="padding: 10px; border: 1px solid #ddd;"><?= $data['judul']; ?></td>
                <td style="padding: 10px; border: 1px solid #ddd;"><?= $data['penulis']; ?></td>
                <td style="padding: 10px; border: 1px solid #ddd; text-align: center;">
                <div style="display: flex; align-items: center; gap: 5px;">
                    <a href="edit.php?id=<?= $data['id_buku']; ?>" style="background: #3498db; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">
                        Edit
                    </a>
                    <a onclick="return confirm('Hapus?')" href="delete.php?id=<?= $data['id_buku']; ?>" style="background: #e74c3c; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">
                        Hapus
                    </a>
                </div>  
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>