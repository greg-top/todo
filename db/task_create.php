<?php

require 'connect.php';

function insertTask () {
    if ( isset($_POST['submit']) ) {
        //$connection exists in another file so make it GLOBAL
        global $connection;

        //get data from add task form
        $taskName = $_POST['name'];
        $priority = $_POST['priority'];

        //add task to db
        $query = "INSERT INTO tasks(title, priority) ";
        $query .= "VALUES ('$taskName', '$priority')";

        $result =  mysqli_query($connection, $query);

        if (!$result) {
            die('Query Failed' . mysqli_error($connection));
        }

        return $result;
    }


}

