<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD dengan PHP</title>
</head>

<body>
    <h1>Data Barang</h1>
    <a href="form_tambah.php">Tambah Data</a><br><br>
    <table border="1" width="100%">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Merek</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        // Include / load file koneksi.php
        require_once "koneksi.php";
        // Buat query untuk menampilkan semua data barang
        $sql = $conn->prepare("SELECT * FROM barang");
        $sql->execute(); // Eksekusi querynya

        // Ambil semua data dari hasil eksekusi $sql
        while ($data = $sql->fetch()) {
            echo "<tr>";
            echo "<td>" . $data['kode_barang'] . "</td>";
            echo "<td>" . $data['nama_barang'] . "</td>";
            echo "<td>" . $data['merek'] . "</td>";
            echo "<td>" . $data['harga'] . "</td>";
            echo "<td>" . $data['stok'] . "</td>";
            echo "<td><a href='form_ubah.php?kode_barang=" .
                $data['kode_barang'] . "'>Ubah</a></td>";
            echo "<td><a href='proses_hapus.php?kode_barang=" .
                $data['kode_barang'] . "'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>