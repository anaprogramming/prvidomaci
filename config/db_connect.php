<!-- Konekcija sa bazom koju unosimo u svaki fajl u aplikaciji -->
<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'gymsport';
$conn = mysqli_connect($host, $user, $password, $database);


if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
  