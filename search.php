<?php 
include 'koneksi.php'; 
$keyword = $_GET['keyword']; 
?>

<!DOCTYPE html>
<html style="font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6;">
<body style="padding: 20px;">
    <div style="max-width: 900px; margin: auto; background: white; padding: 30px; border-radius: 10px;">
        <h3>Hasil Pencarian: "<?php echo $keyword; ?>"</h3>
        <a href="index.php" style="color: #3498db;">← Kembali ke Daftar Semua Buku</a>
        <br><br>

        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background: #eee;">
                <th style="padding: 10px; border: 1px solid #ddd;">Judul</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Penulis</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Aksi</th>
            </tr>
            <?php
            $query = "SELECT * FROM tb_buku WHERE judul LIKE '%$keyword%' OR penulis LIKE '%$keyword%'";
            $sql = mysqli_query($koneksi, $query);

            if(mysqli_num_rows($sql) > 0){
                while($data = mysqli_fetch_array($sql)){
                    echo "<tr>
                            <td style='padding:10px; border:1px solid #ddd;'>{$data['judul']}</td>
                            <td style='padding:10px; border:1px solid #ddd;'>{$data['penulis']}</td>
                            <td style='padding:10px; border:1px solid #ddd; text-align:center;'>
                                <a href='edit.php?id={$data['id_buku']}'>Edit</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3' style='text-align:center; padding:20px;'>Data tidak ditemukan.</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>