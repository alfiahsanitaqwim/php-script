<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        h1, h2, h3{
            text-align: center;
        }

        table {
            font-family: arial;
            border-collapse: collapse;
            width: 100%;
        }

        td,th {
            border: 1px solid;
            padding: 8px;
        }

        th{
            background-color: #dee1b5;
        }

    </style>
</head>
<body>
    <h1>Daftar Nilai Peserta</h1>
    <h2>Junior Web Developer</h2>
    <h3>BBPVP Bekasi</h3>

    <?php
    $peserta = [
        [
            "nama" => "Adjie Ramadhani",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Ahmad Fauzi",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Alfi Ahsani Taqwim",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Anugerah Ramadhan",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Ardana Sultan",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Arsita Nurfauziah",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Azhara Satriadi",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Dewa Angga",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Fathul Huda",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Ferdianto",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Haris Muhammad",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "M Abdul Hadi",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "M Abduh",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "M Ibrahim",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Nindia Citra",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ],
        [
            "nama" => "Putra Fikri",
            "nilai tugas" => 90,
            "nilai UJK" => 90
        ]
    ];

    echo "<table border= '1'>";
    echo "<tr><th>No</th><th>Nama Peserta</th><th>Nilai Tugas</th><th>Nilai UJK</th></tr>";

    foreach($peserta as $key => $val){
        echo"<tr>";
        echo"<td>".($key+1)."</td>";
        echo"<td>".$val['nama']."</td>";
        echo"<td>".$val['nilai tugas']."</td>";
        echo"<td>".$val['nilai UJK']."</td>";
        echo"<tr>";
    }

    echo"</table>";
    ?>

</body>
</html>