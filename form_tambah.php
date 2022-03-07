<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD dengan PHP</title>
</head>

<body>
    <h1>Tambah Data Barang</h1>
    <form method="post" action="proses_insert.php">
        <table cellpadding="8">
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kode_barang"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>Merek</td>
                <td><input type="text" name="merek"></td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
        </table>
        <hr>
        <input type="submit" value="Simpan">
        <a href="halaman_barang.php"> <input type="button" value="Batal"></a>
    </form>
</body>

</html>