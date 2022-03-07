<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD dengan PHP</title>
</head>

<body>
    <h1>Ubah Data Barang</h1>
    <?php
    // Load file koneksi.php
    include "koneksi.php";
    // Ambil data kode_barang yang dikirim oleh halaman_barang.php melalui URL
    $kode_barang = $_GET['kode_barang'];
    // Query untuk menampilkan data barang berdasarkan kode_barang yang dikirim
    $sql = $conn->prepare("SELECT * FROM barang WHERE
kode_barang=:kd");
    $sql->bindParam(':kd', $kode_barang);
    $sql->execute();
    $data = $sql->fetch();
    ?>
    <form method="post" action="proses_ubah.php?kode_barang=<?php
                                                            echo $kode_barang; ?>">
        <table cellpadding="8">
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kode_barang" value="<?php echo $data['kode_barang'];
                                                                    ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang'];
                                                                    ?>"></td>
            </tr>
            <tr>
                <td>Merek</td>
                <td><input type="text" name="merek" value="<?php echo $data['merek'];
                                                            ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $data['harga'];
                                                            ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" value="<?php
                                                            echo $data['stok']; ?>"></td>
            </tr>
        </table>
        <hr>
        <input type="submit" value="Ubah">
        <a href="halaman_barang.php"><input type="button" value="Batal"></a>
    </form>
</body>

</html>