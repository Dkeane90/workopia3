<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "../helpers.php";

$routes = [
    "/" => "controllers/home.php",
    "/listings" => "controllers/listings/index.php",
    "/listings/create" => "controllers/listings/create.php",
];


$uri = $_SERVER["REQUEST_URI"];

if (array_key_exists($uri, $routes)) {
    require(basePath($routes[$uri]));
}
