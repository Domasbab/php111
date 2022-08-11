<h1 Style = Color:blue>Masyvai:</h1>
<?php


echo '<pre>';

$mas = ['balta', 9 => 'juoda', 'raudona'];



$mas['Super kate'] = 'ipatinga kate';

$mas[] = 'kate';

$mas[7] = 'Suo';

$mas['-9.87'] = 'Dramblys';

$mas[] = 'kate';

echo count($mas);

echo '<br>';

print_r($mas);

print_r(range(1, 19));


echo '<br>';

foreach(range(0, 4) as $val) {
    echo "Dabar: $val \n";
}

echo '<br>';

$colors = ['Red', 'Greed', 'Blue', 'Yellow'];

foreach($colors as $value) {
    echo 'Reiksme: ' . $value . '<br>';
}

echo '<br>';

$colors = ['Red', 'Greed', 'Blue', 'Yellow'];

foreach($colors as $index => $value) {
    echo 'Indexas: ' . $index . ' Reiksme: ' . $value . '<br>';
}