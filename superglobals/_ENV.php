<?php

require "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); // there is a error 
$dotenv->load();

// good for storing credentials
// echo "this is the enviornment variable : ".getenv('username'); 
echo "this is the enviornment variable : ".$_ENV('username'); 

// $_ENV is also used but more buggage like burden for use it

// phpinfo();
?>