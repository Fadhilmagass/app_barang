<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data ID yang dikirim oleh halaman_barang.php melalui URL
$kode_barang = $_GET['kode_barang'];
// Query untuk menghapus data barang berdasarkan kode_barang yang dikirim
$sql = $conn->prepare("DELETE FROM barang WHERE
kode_barang=:kd_brg");
$sql->bindParam(':kd_brg', $kode_barang);
$execute = $sql->execute(); // Eksekusi / Jalankan query
// Cek jika proses simpan ke database sukses atau tidak
if ($execute) {
    // Jika Sukses, Lakukan :
    // Redirect ke halaman halaman_barang.php
    header("location: halaman_barang.php");
} else {
    // Jika Gagal, Lakukan :
    echo "Data gagal dihapus. <a
href='halaman_barang.php'>Kembali</a>";
}