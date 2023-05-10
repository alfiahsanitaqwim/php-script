<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $tahun = $_POST['tahun'];
    ?>
    <h2>Daftar Peserta Pelatihan</h2>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table striped">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Program Pelatihan</th>
                        <th>Tahun Pendaftaran</th>
                    </tr>
                    <tr>
                        <td><?php
                        echo "$nama<br>";
                        ?></td>
                        <td><?php
                        echo "$email<br>";
                        ?></td>
                        <td><?php
                        echo "$alamat<br>";
                        ?></td>
                        <td><?php
                        echo "$jurusan<br>";
                        ?></td>
                        <td><?php
                        echo "$tahun<br>";
                        ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

