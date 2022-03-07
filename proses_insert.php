<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$kd_brg = $_POST['kode_barang'];
$nm_brg = $_POST['nama_barang'];
$merek = $_POST['merek'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

// Proses simpan ke Database
$sql = $conn->prepare("INSERT INTO barang(kode_barang, nama_barang,
merek, harga, stok)
VALUES(:kode_barang,:nama_barang,:merek,:harga,:stok)");
$sql->bindParam(':kode_barang', $kd_brg);
$sql->bindParam(':nama_barang', $nm_brg);
$sql->bindParam(':merek', $merek);
$sql->bindParam(':harga', $harga);
$sql->bindParam(':stok', $stok);
// Eksekusi query insert
$sql->execute();

// Cek jika proses simpan ke database sukses atau tidak
if ($sql) {
    // Jika Sukses, Lakukan :
    // Redirect ke halaman halaman_barang.php
    header("location: halaman_barang.php");
} else {
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan
data ke database.";
    echo "<br><a href='form_tambah.php'>Kembali Ke Form</a>";
}