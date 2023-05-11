<?php

// Bangun datar Persegi
$namaBD = "Persegi";
$sisiPersegi = 4;
$luasPersegi = $sisiPersegi * $sisiPersegi;
$kelPersegi = $sisiPersegi * 4;

echo "Bangun Datar : {$namaBD}<br>";
echo "Sisi : {$sisiPersegi}<br>";
echo "Luas : {$luasPersegi}<br>";
echo "Keliling : {$kelPersegi}<br><br>";

// Bangun datar Persegi Panjang
$namaPpanjang = "Persegi Panjang";
$panjangPpanjang = 4;
$lebarPpanjang = 6;
$luasPpanjang = $panjangPpanjang * $lebarPpanjang;
$kelPpanjang = 2 * ( $panjangPpanjang + $lebarPpanjang);

echo "Bangun Datar : {$namaPpanjang}<br>";
echo "Panjang : {$panjangPpanjang}<br>";
echo "Lebar : {$lebarPpanjang}<br>";
echo "Luas : {$luasPpanjang}<br>";
echo "Keliling : {$kelPpanjang}<br><br>";

// Bangun datar Segitiga
$namaSgtg = "Segitiga sama kaki";
$alasSgtg = 5;
$tinggiSgtg = 8;
$kakiSgtg = 10;
$luasSgtg = ($alasSgtg * $tinggiSgtg) / 2;
$kelSgtg = $alasSgtg * $kakiSgtg * $kakiSgtg;

echo "Bangun Datar : {$namaSgtg}<br>";
echo "Alas : {$alasSgtg}<br>";
echo "Tinggi : {$tinggiSgtg}<br>";
echo "Kaki : {$kakiSgtg}<br>";
echo "Luas Persegi : {$luasSgtg}<br>";
echo "Keliling Persegi : {$kelSgtg}<br><br>";

// Bangun datar Lingkaran
$namaLing = "Lingkaran";
$jariLing = 14;
$luasLing = 3.14 * $jariLing * $jariLing;
$kelLing = 3.14 * ($jariLing + $jariLing);

echo "Bangun Datar : {$namaLing}<br>";
echo "Jari-jari : {$jariLing}<br>";
echo "Luas : {$luasLing}<br>";
echo "Keliling : {$kelLing}<br><br>";

// Bangun datar Jajar genjang
$namaJajar = "Jajar genjang";
$alasJajar = 7;
$tinggiJajar = 4;
$sisimiringJajar = 5;
$luasJajar = $alasJajar * $tinggiJajar;
$kelJajar = 2 * ($alasJajar + $sisimiringJajar);

echo "Bangun Datar : {$namaJajar}<br>";
echo "Alas : {$alasJajar}<br>";
echo "Tinggi : {$tinggiJajar}<br>";
echo "Sisi miring : {$sisimiringJajar}<br>";
echo "Luas : {$luasJajar}<br>";
echo "Keliling : {$kelJajar}<br><br>";


?>

