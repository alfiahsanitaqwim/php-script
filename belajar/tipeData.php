<?php

// Mencetak pada php
echo"Okay <br><br>";

// Tipe data integer
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10*5);
$e = $d - $c;

echo "varibel a : {$a}<br>";
echo "varibel b : {$b}<br>";
echo "varibel c : {$c}<br>";
echo "varibel d : {$d}<br>";
echo "varibel e : {$e}<br><br>";

// var_dump($a);



// Tipe data float
$nilaiUTS = 8.5;
$nilaiUAS = 7.7;
$nilaiAkhir = ($nilaiUTS + $nilaiUAS) / 2; 


echo "Nilai UTS : {$nilaiUTS} <br>";
echo "Nilai UAS : {$nilaiUAS} <br>";
echo "Nilai Akhir : {$nilaiAkhir} <br><br>";

$lulus = true;
$selesai = false;

var_dump($lulus);
echo"<br>";
var_dump($selesai);
echo"<br>";
echo"<br>";

// Tipe data string
$namaDepan = "Alfi";
$namaBelakang = "Ahsani";
$namaLengkap = $namaDepan." ".$namaBelakang;

echo "Nama Lengkap : {$namaLengkap}";
?>