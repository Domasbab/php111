<?php


$cat = 'Murka';


//POST scenarijus
if ('POST' == $_SERVER['REQUEST_METHOD']) {

    $ra = $_POST['rapolas'] ?? 'Nieko nera';


    if(!file_exists(__DIR__ . '/data.json',)) {
        file_put_contents(__DIR__ . '/data.json', json_encode([]));
    }


    $data = json_decode(file_get_contents(__DIR__ . 'data/json',1));

    $data[] = $ra;



    file_put_contents(__DIR__ . '/data.json', json_encode($data));


    header("Location:http://localhost/php111/indexas.php");
    die;

}


//GET scenarijus

$ra = $_GET['rapolas2'] ?? 'Nieko nera';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 017</title>
</head>
<body>
<h1>Tekstas</h1>

<a href="http://localhost/php111/indexas.php"><?= $cat ?></a>

<form action="http://localhost/php111/indexas.php" method="post">

    <input type="text" name="rapolas" />
    <button type="submit">Tikras</button>



</form>

<?php foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $val) : ?>
<li><?= $val ?></li>
<?php endforeach ?>
<ul>
    
</body>
</html>