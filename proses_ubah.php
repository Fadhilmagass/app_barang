<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data kode_barang yang dikirim oleh form_ubah.php melalui URL
$kode_barang = $_GET['kode_barang'];
// Ambil Data yang Dikirim dari Form
$kode_barang = $kode_barang;
$nama_barang = $_POST['nama_barang'];
$merek = $_POST['merek'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
// Proses ubah data ke Database
$sql = $conn->prepare("UPDATE barang SET nama_barang=:nm_brg,
merek=:merek, harga=:harga, stok=:stok WHERE kode_barang=:kd_brg");
$sql->bindParam(':kd_brg', $kode_barang);
$sql->bindParam(':nm_brg', $nama_barang);
$sql->bindParam(':merek', $merek);
$sql->bindParam(':harga', $harga);
$sql->bindParam(':stok', $stok);
$execute = $sql->execute(); // Eksekusi / Jalankan query
// Cek jika proses simpan ke database sukses atau tidak
if ($execute) {
    // Jika Sukses, Lakukan :
    // Redirect ke halaman halaman_barang.php
    header("location: halaman_barang.php");
} else {
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan
data ke database.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}