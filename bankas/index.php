<?php

echo '<pre>';

// echo 'Welcome';


delfine('INSTALL', '/php111/bankas/');

router();

function router() {


   print_r($_SERVER);

   $url = $_SERVER['REQUEST_URI'];

   $url = string_replace(INSTALL, '', $url);

   $url = explode('/', $url);

   print_r($url);

   if($url[0] == 'add-money') {
    require __DIR__ . '/inc/add.php';
   }

//    echo $url;

}


?>