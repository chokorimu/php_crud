CREATE DATABASE IF NOT EXISTS biodata;
USE biodata;

CREATE TABLE IF NOT EXISTS tb_buku (
  id_buku int(11) PRIMARY KEY AUTO_INCREMENT,
  judul varchar(50) NOT NULL,
  penulis varchar(50) NOT NULL,
  penerbit varchar(50) NOT NULL,
  tahun int(4) NOT NULL
);

INSERT INTO tb_buku (judul, penulis, penerbit, tahun) VALUES 
  ('The Great Gatsby', 'F. Scott Fitzgerald', 'Scribner', 1925),
  ('To Kill a Mockingbird', 'Harper Lee', 'J.B. Lippincott & Co.', 1960),
  ('1984', 'George Orwell', 'Secker & Warburg', 1949),
  ('The Catcher in the Rye', 'J.D. Salinger', 'Little, Brown', 1951),
  ('Pride and Prejudice', 'Jane Austen', 'T. Egerton', 1813),
  ('The Hobbit', 'J.R.R. Tolkien', 'George Allen & Unwin', 1937),
  ('Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 'Bloomsbury', 1997),
  ('The Seven Husbands of Evelyn Hugo', 'Taylor Jenkins Reid', 'Atria Books', 2017),
  ('Where the Crawdads Sing', 'Delia Owens', 'G.P. Putnam\'s Sons', 2018),
  ('Normal People', 'Sally Rooney', 'Faber & Faber', 2018),
  ('Project Hail Mary', 'Andy Weir', 'Ballantine Books', 2021),
  ('The Midnight Library', 'Matt Haig', 'Canongate Books', 2020),
  ('Circe', 'Madeline Miller', 'Little, Brown', 2018),
  ('The Song of Achilles', 'Madeline Miller', 'Ecco Press', 2011),
  ('Lessons in Chemistry', 'Bonnie Garmus', 'Doubleday', 2022),
  ('Tomorrow, and Tomorrow, and Tomorrow', 'Gabrielle Zevin', 'Knopf', 2022),
  ('The Goldfinch', 'Donna Tartt', 'Little, Brown', 2013),
  ('The Road', 'Cormac McCarthy', 'Alfred A. Knopf', 2006),
  ('Gone Girl', 'Gillian Flynn', 'Crown Publishing', 2012),
  ('Educated', 'Tara Westover', 'Random House', 2018);
