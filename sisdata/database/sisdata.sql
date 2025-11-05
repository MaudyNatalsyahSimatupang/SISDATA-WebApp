CREATE DATABASE sisdata;
USE sisdata;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100),
  password VARCHAR(255)
);

INSERT INTO users (email, password) VALUES
('admin@sisdata.com', PASSWORD('12345')); -- atau ubah pakai password_hash di PHP

CREATE TABLE siswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nis VARCHAR(20),
  nama VARCHAR(100),
  kelas VARCHAR(20),
  alamat TEXT,
  email VARCHAR(100),
  telepon VARCHAR(20)
);
