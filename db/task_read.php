<?php

require 'connect.php';

function getTasksData () {
    //$connection exists in another file so make it GLOBAL
    global $connection;
    //query DB to get all data from tasks table
    $query = "SELECT * FROM tasks";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }

    return $result;
}