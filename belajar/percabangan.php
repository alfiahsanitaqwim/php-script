<?php

// 1. Percabangan if else

$a = 5;
$b = 2;

if ($a > $b){
    echo "a is bigger than b";
} elseif ($a == $b){
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}

echo "<br>";


// 2. switch case

$i=3;
switch ($i){
    case 1;
        echo "sunday";
        break;

    case 2;
        echo "monday";
        break;

    case 3:
        echo "tuesday";
        break;

    case 4;
        echo "wenesday";
        break;

    case 5;
        echo "thursday";
        break;

    case 6:
        echo "friday";
        break;
    case 7:
        echo "saturday";
        break;
}
echo "<br>";
echo "<br>";

// Buat percabangan

$n = 90;
if ($n <=60){
    echo "Your score: $n<br>";
    echo "Sangat kurang";
} elseif ($n > 60 && $n <= 70){
    echo "Your score: $n<br>";
    echo "Kurang";
} elseif ($n > 70 && $n <= 80){
    echo "Your score: $n<br>";
    echo "Cukup";
} elseif ($n > 80 && $n <= 90){
    echo "Your score: $n<br>";
    echo "Baik";
} elseif ($n > 90 && $n <= 100){
    echo "Your score: $n<br>";
    echo "Sangat baik";
} else {
    echo "Your score: $n<br>";
    echo "Maaf, format nilai tidak sesuai";
}

echo "<br>";
echo "<br>";

$i=30;
switch ($i){
    case ($i <=60);
        echo "Your score: $i<br>";
        echo "Sangat kurang";
        break;

    case ($i > 60 && $i <= 70);
        echo "Your score: $i<br>";
        echo "Kurang";
        break;

    case ($i > 70 && $i <= 80):
        echo "Your score: $i<br>";
        echo "Cukup";
        break;

    case ($i > 80 && $i <= 90);
        echo "Your score: $i<br>";
        echo "Baik";
        break;

    case ($i > 90 && $i <= 100);
        echo "Your score: $i<br>";
        echo "Sangat baik";
        break;

    case 6:
        echo "Your score: $i<br>";
        echo "Maaf, format nilai tidak sesuai";
        break;
}

?>