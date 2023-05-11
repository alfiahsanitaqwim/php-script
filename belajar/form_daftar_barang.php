<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<div class="box">
        <h2>Data Input Barang</h2>
        <form action="daftar_barang.php" method="post">
            <div class="inputBox">
                <input type="text" name="nama_barang">
                <label for="">Nama Barang</label>
            </div>
            <div class="inputBox">
                <input type="text" name="harga_beli">
                <label for="">Harga Beli</label>
            </div>
            <div class="inputBox">
                <input type="text" name="harga_jual">
                <label for="">Harga Jual</label>
            </div>
            <input type="submit" value="submit" name="tombol">
        </form>
    </div>
</body>

</html>