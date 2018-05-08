<?php

require 'connect.php';

global $connection;

$id = $_GET['id'];
if ( !isset($id) ) {
    return;
}

$query = "DELETE FROM tasks";
$query .= " WHERE id = $id";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("wrong delete query". mysqli_error($connection));
}
header('Location:../index.php');

