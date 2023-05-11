<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <style>
        body{
            color: #2B3467;
        }
        h1,
        h2 {
            text-align: center;
        }

        table {
            align: center;
            font-family: arial;
            border-collapse: collapse;
            padding-bottom: 100px;
            width: 100%;
        }

        td,
        th {
            border: 1px solid;
            padding: 8px;
        }

        th {
            background-color: #BAD7E9;
        }
        tr:nth-child(odd) {
            background: #FCFFE7;
        }
        .klik {
            border: none;
            outline: none;
            color: #FCFFE7;
            background: #2B3467;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            display: justify;
        }
        .klik:hover {
            background-color: #BAD7E9;
            color: #2B3467;
        }

    </style>
</head>
<body>
    <h1>Daftar Nama Barang</h1>
    <h2>MoMaMi Official Shop</h2>
    <?php
    $barang = [
        [
            'nama barang' => 'Baby tooth and gum',
            'harga beli' => 30000,
            'harga jual' => 45000
        ],
        [
            'nama barang' => 'Sun lotion',
            'harga beli' => 116000,
            'harga jual' => 139000
        ],
        [
            'nama barang' => 'Lotion and cream',
            'harga beli' => 45000,
            'harga jual' => 69000
        ],
        [
            'nama barang' => 'Antibacterial wipes',
            'harga beli' => 85000,
            'harga jual' => 99000
        ],
        [
            'nama barang' => 'Softie top to toe wash',
            'harga beli' => 99000,
            'harga jual' => 129000
        ],
        [
            'nama barang' => 'Shooting gel',
            'harga beli' => 50000,
            'harga jual' => 79000
        ],
        [
            'nama barang' => 'Stretch Mark serum',
            'harga beli' => 109000,
            'harga jual' => 129000
        ],
        [
            'nama barang' => 'Toothpaste non flouride',
            'harga beli' => 66000,
            'harga jual' => 89000
        ],
        [
            'nama barang' => 'Hair serum',
            'harga beli' => 46000,
            'harga jual' => 69000
        ],
        [
            'nama barang' => 'Pocket sanitizer',
            'harga beli' => 9000,
            'harga jual' => 19000
        ],
        [
            'nama barang' => 'Shampoo',
            'harga beli' => 130000,
            'harga jual' => 149000
        ],
        [
            'nama barang' => 'Starter pack wipes',
            'harga beli' => 129000,
            'harga jual' => 145000
        ],
    ];

    // Menghitung pajak
    function nilai_pajak($harga_beli){
        $pajak = $harga_beli * 0.1;
        return $pajak;
    } 
    
    function nilai_profit($harga_beli, $harga_jual, $pajak){
        // $pajak = $harga_beli * 0.1; // Menghitung pajak
        $profit = $harga_jual - ($harga_beli + $pajak); // menghitung profit
        return $profit;
    }

    // cek apakah form telah di-submit
    if (isset($_POST['tombol'])) {
        // ambil data yang diinputkan melalui form
        $nama_barang = $_POST['nama_barang'];
        $harga_beli = $_POST['harga_beli'];
        $harga_jual = $_POST['harga_jual'];

        // tambahkan data peserta ke dalam array
        $barang[]= [
            'nama barang' => $nama_barang,
            'harga beli' => $harga_beli,
            'harga jual' => $harga_jual
        ];
    }
    
    ?>
    <!-- Menampilkan hasil dalam sebuah tabel -->
    <table>
        <tr>
            <th>Nomor</th>
            <th>Nama Barang</th>
            <th>Harga Beli</th>
            <th>Pajak 10%</th>
            <th>Harga Jual</th>
            <th>Profit</th>
        </tr>
        <!-- Menampilkan data berdasarkan array -->
        <?php foreach ($barang as $key => $val) : ?>
            <tr>
                <!-- Menampilkan index berdasarkan data array -->
                <td><?= $key + 1 ?></td>
                <!-- Menampilkan data nama barang -->
                <td><?= $val['nama barang'] ?></td>
                <!-- Menampilkan nilai data tugas -->
                <td><?= $val['harga beli'] ?></td>
                <!-- Menampilkan pajak 10% -->
                <td><?= nilai_pajak($val['harga beli']) ?></td>
                <!-- Menampilkan nilai data tugas -->
                <td><?= $val['harga jual'] ?></td>
                <!-- Menampilkan profit -->
                <td><?= nilai_profit($val['harga beli'],$val['harga jual'],nilai_pajak($val['harga beli'])) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <!-- Menampilkan tombol dengan onclick-->
    <button class="klik" onclick="window.location.href='form_daftar_barang.php'">Tambah</button>
</body>
</html>