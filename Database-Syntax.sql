-- 1. Membuat Database
CREATE DATABASE IF NOT EXISTS biodata;
USE biodata;

-- 2. Membuat Struktur Tabel (Syntax Database)
CREATE TABLE IF NOT EXISTS tb_buku (
  id_buku int(11) PRIMARY KEY AUTO_INCREMENT,
  judul varchar(100) NOT NULL,
  penulis varchar(50) NOT NULL,
  penerbit varchar(50) NOT NULL,
  tahun int(4) NOT NULL
);

-- 3. Dumping Data (Data Contoh agar saat di-import tidak kosong)
-- Ini membantu dosen saat memeriksa fitur 'Read' dan 'Search' kamu.
INSERT INTO tb_buku (judul,penulis,penerbit,tahun) VALUES 
('Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005),
('Bumi', 'Tere Liye', 'Gramedia', 2014),
('Filosofi Teras', 'Henry Manampiring', 'Kompas', 2018);
	

