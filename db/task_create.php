<?php

require 'connect.php';


if ( isset($_POST['submit']) ) {

    //$connection exists in another file so make it GLOBAL
    global $connection;

    //get data from add task form
    $taskName = strip_tags($_POST['name']); //strip_tags => removes HTML and PHP tags from a string
    $priority = strip_tags($_POST['priority']);


    //add task to db
    $query = "INSERT INTO tasks(title, priority) ";
    $query .= "VALUES ('$taskName', '$priority')";

    $result =  mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }

    header('Location:../index.php');

}



