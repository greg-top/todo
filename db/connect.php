<?php

$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'phplearning';

$connection = mysqli_connect($host, $user,$password,$database);

if (!$connection) {
    die("DB connection failed" . mysqli_error($connection));
}