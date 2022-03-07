<?php
try {
    $db_server = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'db_barang';

    // Mencoba melakukan koneksi ke database MySQL
    $conn = new PDO("mysql:host=$db_server; dbname=$db_name",
    $db_username, $db_password);

    // echo ("koneksi ke database $db_name berhasil !!!");
} catch (PDOException $e) {
    // Tampilkan pesan kesalahan jika koneksi gagal
    die("Koneksi atau query bermasalah: " . $e->getMessage());
}