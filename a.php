<h1>Labas</h1>

<?php 

echo '<i>pats tu toks</i'; 

// $pirmas = 87;

// $antras = "ku /n/n/n/n/n $pirmas";

$trecias = 5;

echo '<br>'; echo '<br>';
echo $trecias+ + $trecias++;

echo '<br>'; echo '<br>';
$pirmas = 'bla bla';
$antras = 'Ku ku';
$trecias = $pirmas . $antras;
echo $trecias;

echo '<br>'; echo '<br>';
$ketvirtas = 18;
echo $ketvirtas;


echo '<br>'; echo '<br>';
$As = 'Sakinys';
echo $As;

// Stringas 6 ilgio nes 6 raidziu zodis zuikis !
echo '<br>'; echo '<br>';
$sestas = 'Zuikis';
var_dump($sestas);


echo '<br>'; echo '<br>';
$septintas = 10;
$septintas += 5;
echo $septintas;


// Stringu sudejimas!
echo '<br>'; echo '<br>';
$astuntas = 'zodis';
$devintas = ' zvirblis';
$desimtas = $astuntas . $devintas;
echo $desimtas;

// Strigus išskiriame viengubom kabutėm, kai stringas neturi jokios specialios reikšmės savyje ir dvigumom kada turi
echo '<br>';
$venuoliktas = 'Kazkoks tekstas';
$dvyliktas = "Kazkoks $venuoliktas tekstas";
echo $dvyliktas;

echo '<br>'; echo '<br>';


$_1 = rand(0,2);
$_2 = rand(0,2);
$_3 = rand(0,2);
$_4 = rand(0,2);

$two = 0;

if ($_1 == 2) $two++; {
    $two++;
}
if ($_2 == 2) $two++; {
    $two++;
}
if ($_3 == 2) $two++; {
    $two++;
}
if ($_4 == 2) $two++; {
    $two++;
}

$suma = $_1 + $_2 + $_3 + $_4;

$one = $suma - (2 * $two);

$zero = 4 - $one -$two;

echo "$_1 $_2 $_3 $_4 ----- $zero:$one:$two";



// Daugiau maziau 
echo '<br>'; echo '<br>';

$a = 15 > 9 ? 'Taip' : 'Ne';

echo $a;

// Uzdarom php
?>


<h1>Ate</h1>
