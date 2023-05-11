<?php

// membuat array
$fruit = array("jeruk","apel","mangga","anggur","jambu");
var_dump($fruit) ;
echo"<br>";
echo"<br>";

// Menampilkan semua isi array
foreach($fruit as $buah){
    echo $buah;
};
echo"<br>";
echo"<br>";

$flower = ["rose", "jasmine", "orchid", "lavender", "lily"];
var_dump($flower) ;
echo"<br>";
echo"<br>";
print_r($flower);
echo"<br>";
echo"<br>";

$harga = 100000;
printf("Harga baju Rp. %.2f", $harga);
echo"<br>";
echo"<br>";

// Array multidimensi
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
foreach ($angka as $a){
    foreach($a as $b){
        echo $b;
    };
};
echo"<br>";
echo"<br>";

// Array assosiatif
$peserta = [
    [
        "nama" => "Nona Alfi",
        "alamat" => "Bekasi",
        "telepon" => "0878379821"
    ],
    [
        "nama" => "Alfi Wawawa",
        "alamat" => "Jakarta",
        "telepon" => "0878734913"
    ]
];

echo $peserta[0]["nama"];

echo"<br>";
echo"<br>";

$age = [ "nama" => "Nona Alfi",
"alamat" => "Bekasi",
"telepon" => "0878379821"];

foreach($age as $v => $value){
    echo "$v = $value <br>";
}

echo"<br>";
echo"<br>";

foreach($age as $v => $value){
    echo "$value <br>";
}
?>