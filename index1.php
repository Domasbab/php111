<?php

echo '<pre>';

// Ciklas!

// for($i = 0; $i < 5; $i++) {
// echo "Dabar: $i \n";
// }


$x = 0;

do {
    echo "Dabar: $x \n";
    $x++;

}while($x < 5);

$y = 0;
while($y > 5) {

    echo "Dabar: $y \n";
    $y++;
}

echo '<br>';


$one = rand(0,10);
while ($one < 9) {
    echo $one . '<br>';
    $one = rand(0,10);
}

echo '<br>';

do {
    $one = rand(0,10);
    echo $one . '<br>';
} while($one < 9);

echo '<br>';
$Dolcas = 'Zodis';
echo $Dolcas;


echo '<br>';echo '<br>';
for ($x = 1; $x <= 5; $x++) {
    echo 'Numeris: '.$x.' <br>';
}


echo '<br>';
// Data ir laikas:
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);

// Laikas dabartiniu metu:
echo '<br>';echo '<br>';
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");

// Tiesiog laiko formatas
echo '<br>';echo '<br>';
echo sprintf('%02d:%02d:%02d', 4, 7 ,12);


echo 'pre';

foreach (range(1,3) as $_) {

$_3X3 = [];
$count = 0;
}

foreach(range(1, 3) as $_) {
    $_3 = [];
    foreach (range(1,3) as $_) {
        $_3[] = ++$count;
    }
    $_3X3 = $_3;
}

print_r($_3X3);



