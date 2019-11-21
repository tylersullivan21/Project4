<?php

$user = "root";
$password = "root";
$dbname = "forum";


$connect = mysqli_connect("localhost", "$user", "$password", "$dbname");

if (!$connect) {
    echo "Error" . PHP_EQL;
}

?>
