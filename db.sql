CREATE DATABASE IF NOT EXISTS db_produk;
USE db_produk;

CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    kode VARCHAR(100) NOT NULL,
    kategori VARCHAR(50) NOT NULL,
    fitur TEXT,
    status VARCHAR(20) NOT NULL,
    deskripsi TEXT
);
