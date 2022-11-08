CREATE DATABASE fakultas;

CREATE TABLE jurusan (
 id INTEGER PRIMARY KEY AUTO_INCREMENT,   
 kode CHAR(4) NOT NULL,
 nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiwa (
  id INTEGER PRIMARY KEY AUTO_INCREMENT, 
  id_jurusan INTEGER NOT NULL,
  nim CHAR(8) NOT NULL,
  nama VARCHAR(50) NOT NULL,
  jenis_kelamin enum('laki-laki', 'perempuan') NOT NULL,
  tempat_lahir VARCHAR(50) NOT NULL,
  tanggal_lahir DATE NOT NULL,
  alamat VARCHAR(255) NOT NULL,
  FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

-- insert jurusan
insert into jurusan (kode, nama) values ("APBL", "Administrasi Publik");

-- insert mahasiwa
insert into mahasiwa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) values (1, "28220001", "Andre", "laki-laki", "Ciamis", "2000-12-25", "Jl. Soekarno Hatta 9");

-- update mahasiwa
update mahasiwa set alamat = "Jl. Ra Sutadnita 12" where id = 1;

-- delete mahasiwa
elete from mahasiwa where id = 1;
