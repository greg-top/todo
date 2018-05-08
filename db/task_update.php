<?php

require 'connect.php';

global $connection;

$taskName = strip_tags($_POST['name']); //strip_tags => removes HTML and PHP tags from a string
$priority = strip_tags($_POST['priority']);
$id = $_GET['id'];

$query = "UPDATE tasks SET";
$query .= " title = '$taskName', ";
$query .= " priority = '$priority' ";
$query .= " WHERE id = $id";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("wrong update query ". mysqli_error($connection));
}

header('Location:../index.php');