<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        h1,
        h2,
        h3 {
            text-align: center;
        }

        table {
            font-family: arial;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid;
            padding: 8px;
        }

        th {
            background-color: #dee1b5;
        }
    </style>
</head>

<body>
    <h1>Daftar Nilai Peserta</h1>
    <h2>Junior Web Developer</h2>
    <h3>BBPVP Bekasi</h3>

    <?php
    // Mendeklarasikan data peserta dalam array assosiatif
    $peserta = [
        [
            "nama" => "Adjie Ramadhani",
            "nilai tugas" => 90,
            "nilai UJK" => 80
        ],
        [
            "nama" => "Ahmad Fauzi",
            "nilai tugas" => 90,
            "nilai UJK" => 80
        ],
        [
            "nama" => "Alfi Ahsani Taqwim",
            "nilai tugas" => 99,
            "nilai UJK" => 98
        ],
        [
            "nama" => "Anugerah Ramadhan",
            "nilai tugas" => 80,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Ardana Sultan",
            "nilai tugas" => 90,
            "nilai UJK" => 80
        ],
        [
            "nama" => "Arsita Nurfauziah",
            "nilai tugas" => 70,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Azhara Satriadi",
            "nilai tugas" => 90,
            "nilai UJK" => 80
        ],
        [
            "nama" => "Dewa Angga",
            "nilai tugas" => 90,
            "nilai UJK" => 80
        ],
        [
            "nama" => "Fathul Huda",
            "nilai tugas" => 90,
            "nilai UJK" => 70
        ],
        [
            "nama" => "Ferdianto",
            "nilai tugas" => 90,
            "nilai UJK" => 70
        ],
        [
            "nama" => "Haris Muhammad",
            "nilai tugas" => 90,
            "nilai UJK" => 80
        ],
        [
            "nama" => "M Abdul Hadi",
            "nilai tugas" => 80,
            "nilai UJK" => 90
        ],
        [
            "nama" => "M Abduh",
            "nilai tugas" => 80,
            "nilai UJK" => 90
        ],
        [
            "nama" => "M Ibrahim",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Nindia Citra",
            "nilai tugas" => 87,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Nurul Fikri Putra ",
            "nilai tugas" => 89,
            "nilai UJK" => 90
        ]
    ];

    // Mencari nilai rata-rata
    function rataRata($nTugas, $nUjk)
    {
        $rata = ($nTugas + $nUjk) / 2;
        return $rata;
    }

    // Mencari keterangan berdasarkan nilai rata-rata
    function keterangan($rerata)
    {
        if ($rerata <= 60) {
            return 'Sangat Kurang';
        } elseif ($rerata > 60 && $rerata <= 70) {
            return 'Kurang';
        } elseif ($rerata > 70 && $rerata <= 80) {
            return 'Cukup';
        } elseif ($rerata > 80 && $rerata <= 90) {
            return 'Baik';
        } elseif ($rerata > 90 && $rerata <= 100) {
            return 'Sangat Baik';
        } else {
            return 'Nilai Anda tidak sesuai';
        }
    }

    // cek apakah form telah di-submit
    if (isset($_POST['tombol'])) {
        // ambil data yang diinputkan melalui form
        $nama = $_POST['nama'];
        $nTugas = $_POST['nilaitugas'];
        $nUjk = $_POST['nilaiujk'];

        // tambahkan data peserta ke dalam array
        $peserta[]= [
            'nama' => $nama,
            'nilai tugas' => $nTugas,
            'nilai UJK' => $nUjk
        ];
    }
    ?>

    <!-- Menampilkan hasil dalam sebuah tabel -->
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai Tugas</th>
            <th>Nilai UJK</th>
            <th>Nilai Rata-rata</th>
            <th>Keterangan</th>
        </tr>

        <!-- Menampilkan data berdasarkan array -->
        <?php foreach ($peserta as $key => $val) : ?>
            <tr>
                <!-- Menampilkan index berdasarkan data array -->
                <td><?= $key + 1 ?></td>
                <!-- Menampilkan data nama -->
                <td><?= $val['nama'] ?></td>
                <!-- Menampilkan nilai data tugas -->
                <td><?= $val['nilai tugas'] ?></td>
                <!-- Menampilkan nilai data tugas -->
                <td><?= $val['nilai UJK'] ?></td>
                <!-- Menampilkan nilai data rata-rata -->
                <td><?= rataRata($val['nilai tugas'], $val['nilai UJK']) ?></td>
                <!-- Menampilkan nilai keterangan -->
                <td><?= keterangan(rataRata($val['nilai tugas'], $val['nilai UJK'])) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <!-- Menampilkan tombol dengan onclick-->
    <button onclick="window.location.href='form.php'">Tambah</button>

</body>

</html>