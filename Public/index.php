<?php
require_once "../vendor/autoload.php";

$route = new \App\Route;
echo 'Rotas funcionando as 15h';
echo '<hr>';
print_r($route->getUrl());
echo '<hr>';
echo '<pre>';
print_r($route->getRoutes());
echo '</pre>';
?>

<?php


?>