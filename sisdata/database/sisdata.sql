-- sisdata.sql

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100),
  password VARCHAR(255)
);

INSERT INTO users (email, password) VALUES
('admin@sisdata.com', '$2y$10$0OYnDmE4b13j70t9KF2IBu7uyRh0RDRTg0TqD28P52j9WOe.3SN9i'); 
-- password: 12345 (sudah di-hash pakai password_hash)

CREATE TABLE siswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nis VARCHAR(20),
  nama VARCHAR(100),
  kelas VARCHAR(20),
  alamat TEXT,
  email VARCHAR(100),
  telepon VARCHAR(20)
);
