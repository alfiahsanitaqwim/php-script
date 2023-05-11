<?php

function Cetak(){
    echo"ok <br>";
}
Cetak();
Cetak();
Cetak();
Cetak();
Cetak();

echo "<br>";

// Membuat fungsi dengan parameter
function data($nama, $umur){
    echo "Perkenalkan saya ".$nama.", ";
    echo "umur ".$umur." tahun";
}

data("Alfi","17");
echo "<br>";

// Fungsi mengembalikan nilai
function hitungUmur($lahir, $sekarang){
    $umur = $sekarang - $lahir;
    return $umur;
}
echo "Umur saya ".hitungUmur(2005, 2023)." tahun";

?>