<?php
    require_once"../vendor/autoload.php";

    $route = new \App\Route;
    echo 'Rotas funcionando';
    echo '<hr>';
    print_r($route->getUrl());

    
?>