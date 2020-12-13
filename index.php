<?php
use App\Router;
require 'config.php';

// je charge "autoload" pour charger dynamiquement la classe que l'on souhaite.
require ROOT . "/vendor/autoload.php";
$router = new Router();
$router->start();
?>





